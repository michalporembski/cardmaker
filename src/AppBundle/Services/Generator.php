<?php

namespace AppBundle\Services;

use CardMakerBundle\Entity\Dto\GenerateCard;

/**
 * Class Generator
 * @package AppBundle
 */
class Generator
{
    public function generateCard()
    {
        $layer = rand(1, 16);
        $level = rand(0, 9);
        $titleArr = [
            'CARD NAME',
            'Zamyślony krasnolód',
            'Górnik',
            'Nadszarpnięta myśl',
            'Zaklinacz Skał',
            'Smokopyszczek',
            'Bardzo długi tytuł bardzo nudnej karty aczkolwiek',
            'Kreatura',
            'Gryźlim my trawę'
        ];
        $title = $layer . ' ' . $titleArr[rand() % count($titleArr)];

        $tagArr = [
            'Przyjaciel',
            'Wróg',
            'Wróg Smok',
            'Niebieskooka kulawa nimfa',
            'Klaszczący zgred',
            'Przedmiot',
            'Magiczny Przedmiot',
            'Ksiżycowe Zdarzenie',
            'Przeklęty Przedmiot',
            'Niezmiernie wrogi wróg naszego wroga'
        ];
        $tag = $tagArr[rand() % count($tagArr)];
        $image = 'uploads/' . (rand() % 7) . '.jpg';

        $rand = rand(0, 9);
        $caption = null;
        if ($rand == 0) {
            $caption = 'Siła ' . rand(1, 27);
        } elseif ($rand == 1) {
            $caption = 'Moc ' . rand(1, 29);
        } elseif ($rand == 2) {
            $caption = 'Drobiazg';
        } elseif ($rand == 3) {
            $caption = 'Przeklęty';
        }

        $text = $this->generateText();

        $len = strlen($text);
        if (strlen($caption)) {
            $len += 20;
        }
        $longtext = $len > 230;
        $g = new GenerateCard();
        $g->setSave(false);
        $g->setCaption($caption);
        $g->setImage($image);
        $g->setLayer($layer);
        $g->setLayoutSize(0);
        $g->setLevel($level);
        $g->setTag($tag);
        $g->setTitle($title);
        $g->setText($text);
        return $g;
    }


    protected function generateText()
    {
        $line = '';
        $lenght = rand(5, 105);
        for ($i = 0; $i < $lenght; $i++) {
            $line .= $this->randWord() . ' ';
        }

        return $line;
    }

    protected function randWord()
    {
        $words = [
            'zażółć',
            'gęślą',
            'jaźń',
            'przykładowy',
            'opis',
            'lambda',
            'sztuk złota',
            'karty',
            'składa',
            'się',
            'z',
            'kilku',
            'słów',
            'i',
            'modyfikatora',
            '1k6',
            'do',
            'siły'
        ];

        return $words[rand() % count($words)];
    }
}
