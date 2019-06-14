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
     * @Route("/karaktery_i", name="karaktery_i")
     */
    public function karakteryInstructionAction(Request $request)
    {
        $text = '1. Przygotowanie:
Przed rozpoczęciem rozgrywki, z gry należy usunąć wszelkie karty pozwalające na zmianę charakteru w dowolnym momencie,
bez ograniczeń. Do takich kart należy Poszukiwacz Druid, oraz karta Przygody Kostur Druida.
Po wylosowaniu postaci każdy gracz dobiera 3 karty charakteru odpowiadające charakterowi jego postaci. Musi wybrać z 
pośród nich jedną, drugą zaś odrzucić. Wylosowaną kartę zachować rewersem do góry. Gracz nie ujawnia zdolności 
wynikającej z jego charakteru.
2. Ujawnienie Charakteru:
W momencie gdy gracz będzie chciał skorzystać z umiejętności wynikającej z karty charakteru musi odwrócić tę kartę 
ujawniając ją. Od tej pory wszyscy gracze znają jego charakter. Należy pamiętać o tym że niektóre karty charakteru dają 
jednorazowy efekt, oraz o tym że niektóre karty charakteru nakładają ograniczenie na gracza. Ograniczenia działać będą 
dopiero po ujawnieniu karty charakteru.
3. Zmiana Charakteru:
Gdy gracz będzie musiał zmienić Charakter losuje on nową kartę Charakteru, poprzednią zaś odrzuca. W sytuacji gdy 
pozostali gracze wiedzą jaką kartę charakteru otrzymuje gracz, musi on odrazu ujawnić swoją kartę charakteru.
Przykład: Złodziej nie ujawnił jeszcze swojej karty charakteru. Złodziej rzuca zaklęcie Zamiana Dusz na Wojownika 
który już wcześniej ujawnił swoj charakter. Złodziej otrzymuje kartę Charakteru wojownika i odrazu musi ją ujawnić, 
zaś Wojownik otrzymuje kartę charakteru Złodzieja, która w dalszym ciągu pozostanie nie jawna dla pozostałych graczy.
4. Zmiana Charakteru na taki sam:
W niektórych sytuacjach, jakiś efekt może nakazywać Poszukiwaczowi zmianą Charakteru na Charakter tej samej 
przynależności. Wtedy gracz może zdecydować czy chcę wymienić kartę charakteru, czy ją zachować. Jedynym wyjątkiem od 
tej reguły są sytuacje w których graczowi zostało nakazanę odrzucić, lub przekazać innemu graczowi swoją kartę 
charakteru.
Przykład:
Mroczna Kultyska rzuca zaklęcie Zamiana Dusz na Niebiańską Istotę. Niebiańska Istota odrzuca swoją aktualną kartę 
charakteru, (gdyż Mroczna Kultystka nie może jej zachować) dobiera nową i traci punkt Życia. Mroczna Kultystka też 
odrzuca swoją kartę charakteru (gdyż Niebiańska Istota nie może jej zachować) i dobiera nową kartę złego Charakteru.
5. Aury:
W dodatku pojawiają się zaklęcia oznaczone jako aury. Należy je stosować tylko i wyłącznie z innymi dodatkami które 
używają zaklęć tak oznaczonych.
6. Interakcje z innymi dodatkami:
Dodatek został zaprojektowany tak, aby współpracować z innymi dodatkami, jednak w przypadku niejednoznacznych sytuacji, 
wszelkie niedomówienia w zasadach należy rozwiązywać głośnym krzykiem, zawszę stosując zasadę iż ten kto głośniej 
krzyczy musi mieć racje.
7. Opracowanie
Pomysł i wykonanie: MjhaL
Szablony: Arthan & Bluedogon
Korekta i Testy: Pablo, Mrówa
Pozostałe Grafiki: inni';
        $cardGenerator = $this->get('cardmaker.handler.card_generate');
        $command = new GenerateCard();
        $command->setText($this->removeOrphans($text));
        $command->setLayer(Layer::CARD_INFO);
        $img = $cardGenerator->handle($command);
        var_dump($img);
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
            ' zyskujesz punkt' => ' otrzymujesz punkt',
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
            'jednego Przyjaciela' => '1 Przyjaciela',
            //            'jedno Zaklęcie' => '1 Zaklęcie',
            // czyszczenie podwojen
            '1 1' => '1',
            ',,' => ',',
            '  ' => ' ',
        ];
        foreach ($replaces as $key => $value) {
            $text = str_replace($key, $value, $text);
        }
        if ($text[strlen($text) - 1] != '.') {
            $text .= '.';
        }
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
