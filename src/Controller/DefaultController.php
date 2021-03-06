<?php

namespace App\Controller;

use App\Fixtures\Supplement;
use App\Form\CardGenerateType;
use App\Services\Generator;
use App\Services\RandomHero;
use App\Services\TextCleaner;
use CardMaker\Entity\Dto\GenerateCard;
use CardMaker\Entity\Layer;
use CardMaker\Exceptions\GeneratorException;
use CardMaker\Handler\CardGenerate;
use CardMaker\Services\SheetPrinter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 *
 * @package App\Controller
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $card = null;
        $command = new GenerateCard();
        $form = $this->createForm(CardGenerateType::class, $command);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
//            $cardGenerator = $this->get(CardGenerate::class);
            $cardGenerator = new CardGenerate();
            try {
                $command->setSave(true);
                $card = $cardGenerator->handle($command);
            } catch (GeneratorException $e) {
                $message = $this->get('translator')->trans($e->getMessage());
                $this->addFlash('error', $message);
            }
        }

        return $this->render(
            'create_card.form.html.twig',
            [
                'form' => $form->createView(),
                'card' => $card
            ]
        );
    }

    /**
     * @Route("/supplement", name="supplement")
     */
    public function supplementAction(Request $request)
    {
        $this->generateSheet(Supplement::SMALL_CARDS, Supplement::BIG_CARDS);
    }

    /**
     * @Route("/hero", name="hero")
     */
    public function heroAction(Request $request)
    {
        $randomHero = new RandomHero();
        $randomHero->generateHero();
    }

    /**
     * @Route("/generate", name="generator")
     */
    public function generatorAction(Request $request)
    {
        $service = new Generator();
        $command = $service->generateCard();
        $cardGenerator = $this->get('cardmaker.handler.card_generate');
        $cardGenerator->handle($command);
    }

    /**
     * @Route("/error", name="error")
     */
    public function errorAction(Request $request)
    {
        echo 'TODO: error page';
        die;
    }

    /**
     * @param array $cards
     * @param array $bigCards
     */
    private function generateSheet(array $cards, array $bigCards)
    {
        $cardGenerator = $this->get('cardmaker.handler.card_generate');
        $command = new GenerateCard();
        $command->setSave(true);

        $sheetPrinter = new SheetPrinter();
        foreach ($cards as $data) {
            $command->setText($data['desc']);
            $command->setTitle($data['name']);
            $command->setStory($data['story'] ?? '');
            $command->setCaption($data['caption'] ?? null);
            $command->setCaptionType($data['caption_type'] ?? isset($data['caption']));
            $command->setLevel($data['level'] ?? '');
            $command->setPlaces($data['places'] ?? []);
            $command->setTag($data['tag'] ?? '');
            $command->setLayer($data['card']);
            $command->setImage($data['image'] ?? '');
            $img = $cardGenerator->handle($command);
            $sheetPrinter->addSmallCard($img, Layer::CARDS_BACK[$data['card']]);
        }
        foreach ($bigCards as $data) {
            $sheetPrinter->addBigCard($data['front'], Layer::CARDS_BACK[$data['back']]);
        }
        $sheetPrinter->printPDF();
        die;
    }

    /**
     * @TODO: This unused method should be removed soon or changed to some action
     *
     * @param array $card
     */
    private function validateCard($card)
    {
        /**
         * TODO:
         * extract this to card validator
         */
        $text = $card['desc'];

        $textCleaner = $this->get(TextCleaner::class);
        $text = $textCleaner->cleanText($text);

        if ($text !== $card['desc']) {
            echo '<b style="color:red">' . $text . '</b><br>';
            echo '<b>' . $card['desc'] . '</b><br>';
        } else {
            echo '<span style="color:green">' . $text . '</span><br>';
        }
        if (isset($card['name'])) {
            echo '<span style="color:blue">' . $card['name'] . '</span><br>';
        }
        if (isset($card['story'])) {
            echo '<span style="color:blue">' . $card['story'] . '</span><br>';
        }
        if (isset($card['tag'])) {
            echo '<span style="color:blue">' . $card['tag'] . '</span><br>';
        }
    }
}
