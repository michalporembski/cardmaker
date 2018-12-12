<?php

namespace AppBundle\Fixtures;

use CardMakerBundle\Entity\Layer;

class akcja
{
    const CARDS = [
        [
            'name' => 'Smok',
            'desc' => 'Wzmożony Wysiłek: Możesz użyć tej akcji na początku swojej tury, przekręć/obróć wszystkie swoje karty Ran rewersem do góry. Na początku swojej następnej tury przekręć/obróć wszystkie swoje karty Ran awersem do góry.
            Wtrącenie: Możesz użyć tej akcji gdy wybrany Poszukiwacz będzie kończył ruch. Przenieś się na jego obszar i odbądź z nim spotkanie. Spotkanie to będzie się liczyło jako twój ruch w tej turze.
            Ponowna Inspekcja: Możesz użyć tej akcji przed wykonaniem rzutu za ruch, aby zamiast przemieszczać się na inny obszar ponownie zbatać ten, na którym się znajdujesz.
            ',
            'card' => Layer::CARD_QUEST_REWARD,
        ],
    ];
}