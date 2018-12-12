<?php

namespace AppBundle\Controller;

use AppBundle\Fixtures\Characters;
use AppBundle\Fixtures\RuneGates;
use AppBundle\Fixtures\Supplement;
use AppBundle\Form\CardGenerateType;
use AppBundle\Services\Generator;
use AppBundle\Services\RandomHero;
use CardMakerBundle\Entity\Dto\GenerateCard;
use CardMakerBundle\Entity\Layer;
use CardMakerBundle\Exceptions\GeneratorException;
use CardMakerBundle\Services\SheetPrinter;
use CardMakerBundle\Services\SheetPrinter2;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 *
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
        $this->generateSheet(Characters::CARDS, Characters::BIG_CARDS);
    }

    /**
     * @Route("/karaktery-validate", name="karaktery_validate")
     */
    public function karakteryValidateAction(Request $request)
    {
        $data = Characters::CARDS;
        foreach ($data as $card) {
            $this->validateCard($card);
        }
        die;
    }

    /**
     * @Route("/rune_gates", name="rune_gates")
     */
    public function runeGatesAction(Request $request)
    {
        $this->generateSheet(RuneGates::CARDS);
    }

    /**
     * @Route("/supplement", name="supplement")
     */
    public function supplementAction(Request $request)
    {
        $this->generateSheet(Supplement::CARDS);
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
     * HERO
     * @Route("/print_folder2", name="print_folder")
     */
    public function printFolder2(Request $request)
    {
        try {
            $sheetPrinter = new SheetPrinter();
            $dir = "./print_hero/";
            $dh = opendir($dir);
            while (($file = readdir($dh)) !== false) {
                //                echo "filename:" . $file . "<br>";
                if ($file != '.' && $file != '..') {
                    $sheetPrinter->addBigCard($dir . $file, Layer::CARDS_BACK[Layer::CARD_HERO]);
                }
            }
            closedir($dh);
            $sheetPrinter->printPDF();
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            var_dump($e->getFile() . '::' . $e->getLine());
        }
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
            $command->setText($this->removeOrphans($data['desc']));
            $command->setTitle($data['name']);
            $command->setStory($data['story'] ?? '');
            $command->setCaption($data['caption'] ?? null);
            // TODO: add support for other caption
            $command->setCaptionType(isset($data['caption']) ? 1 : 0);
            $command->setLevel($data['level'] ?? '');
            $command->setPlaces($data['places'] ?? []);
            $command->setTag($data['tag'] ?? '');
            $command->setLayer($data['card']);
            $img = $cardGenerator->handle($command);
            $sheetPrinter->addSmallCard($img, Layer::CARDS_BACK[$data['card']]);
        }
        foreach ($bigCards as $data) {
            $sheetPrinter->addBigCard($data['front'], Layer::CARDS_BACK[$data['back']]);
        }
        $sheetPrinter->printPDF();
        die;
    }

    private function removeOrphans($text)
    {
        // TODO
        // this should work, but it doesn't...
//        $replaces = [
//            'o ' => 'o&nbsp;',
//            'i ' => 'i&nbsp;',
//            'a ' => 'a&nbsp;',
//            '1 ' => '1&nbsp;',
//            '2 ' => '2&nbsp;',
//            '3 ' => '3&nbsp;',
//        ];
//
//        foreach ($replaces as $key => $value) {
//            $text = str_replace($key, html_entity_decode($value), $text);
//        }

        return $text;
    }

    private function validateCard($card)
    {
        $text = $card['desc'];

        $replaces = [
            // często mylone słowa
            'gracz' => 'Poszukiwacz',
            'Gracz' => 'Poszukiwacz',
            'pole ' => 'Obszar ',
            'Pole ' => 'Obszar ',
            'Żeton' => 'punkt',
            'żeton' => 'punkt',
            // interpunkcja
            ' możesz' => ', możesz',
            'nie, możesz' => 'nie możesz',
            'Nie, możesz' => 'Nie możesz',
            'zamiast tego, możesz' => 'zamiast tego możesz',
            ' aby ' => ', aby ',
            // mylone zwroty
            'dowolnej walki' => 'jakiejkolwiek walki',
            // słowa pisane z dużej litery
            ' siły' => ' Siły',
            ' siła' => ' Siła',
            ' mocy' => ' Mocy',
            ' moc ' => ' Moc ',
            ' moc,' => ' Moc,',
            ' moc.' => ' Moc.',
            ' przyjaciel' => ' Przyjaciel',
            ' charakter' => ' Charakter',
            ' zaklę' => ' Zaklę',
            ' nieznajom' => ' Nieznajom',
            ' losu.' => ' Losu.',
            ' losu,' => ' Losu,',
            ' losu ' => ' Losu ',
            // słowa pisane z małej litery:
            'Punkt' => 'punkt',
            // liczebniki
            ' dwa ' => ' 2 ',
            ' dwa.' => ' 2.',
            ' dwa,' => ' 2,',
            'o jeden' => 'o 1',
            'jeden punkt' => '1 punkt',
            '1 Przyjaciela' => ' 1 Przyjaciela',
            '1 punkt' => ' 1 punkt',
            '1 Zaklęcie' => ' 1 Zaklęcie',
            // czyszczenie podwojen
            '1 1' => '1',
            ',,' => ',',
        ];
        foreach ($replaces as $key => $value) {
            $text = str_replace($key, $value, $text);
        }
        if ($text[strlen($text) - 1] != '.') {
            $text .= '.';
        }
        if ($text !== $card['desc']) {
            echo '<b style="color:red">'.$text . '</b><br>';
        } else {
            echo '<span style="color:green">'.$text.'</span><br>';
        }
    }
}
