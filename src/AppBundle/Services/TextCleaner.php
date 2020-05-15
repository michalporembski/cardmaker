<?php

namespace AppBundle\Services;

/**
 * Class TextCleaner
 *
 * @package AppBundle\Services
 */
class TextCleaner
{
    /**
     * @param $text
     *
     * @return string
     */
    public function cleanText($text): string
    {
        $text = $this->fixWording($text);
        $text = $this->preventOprhans($text);

        return $text;
    }

    /**
     * @param $text
     *
     * @return string
     */
    private function fixWording($text): string
    {
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

        return $text;
    }

    /**
     * This method prevents orphans occurrence in text
     * @param string $text
     *
     * @return string
     */
    private function preventOprhans(string $text)
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
}
