<?php

namespace AppBundle\Controller;

use AppBundle\Form\CardGenerateType;
use AppBundle\Services\Generator;
use AppBundle\Fixtures\Characters;
use CardMakerBundle\Entity\Dto\GenerateCard;
use CardMakerBundle\Entity\Layer;
use CardMakerBundle\Services\SheetPrinter;
use CardMakerBundle\Exceptions\GeneratorException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
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
            $cardGenerator = $this->get('cardmaker.handler.card_generate');
            try {
                $command->setSave(true);
                $card = $cardGenerator->handle($command);
            } catch (GeneratorException $e) {
                $message = $this->get('translator')->trans($e->getMessage());
                $this->addFlash('error', $message);
            }
        }
        return $this->render(
            'AppBundle:Default:create_card.form.html.twig',
            [
                'form' => $form->createView(),
                'card' => $card
            ]
        );
    }

    /**
     * @Route("/karaktery", name="karaktery")
     */
    public function karakteryAction(Request $request)
    {
        $karaktery = Characters::CARDS;

        $cardGenerator = $this->get('cardmaker.handler.card_generate');
        $command = new GenerateCard();
        $command->setLayer(Layer::CARD_QUEST_REWARD);
        $command->setSave(true);
        
        $sheetPrinter = new SheetPrinter();
        foreach ($karaktery as $data) {
            $command->setText($data['desc']);
            $command->setTitle($data['name']);
            $command->setStory($data['story']);
            $img = $cardGenerator->handle($command);
            $sheetPrinter->addFile($img,$data['back']);
        }
        $sheetPrinter->printPDF();
        die;
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
}
