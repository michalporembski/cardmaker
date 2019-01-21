<?php

namespace AppBundle\Fixtures;

use CardMakerBundle\Entity\Layer;

class Hero
{
    const CARDS = [
        [
            'name' => 'Niszczyciel',
            'perks' => [
                'Rozpoczynasz grę, posiadając Tarczę (z talii Ekwipunku).',
                'Nie tracisz punktu Życia na Pustyni.',
                'Możesz spróbować zrekrutować dowolnego, jednego Przyjaciela od spotkanego Poszukiwacza. Aby tego dokonać, rzuć 1 kością: musisz uzyskać wynik niższy lub równy liczbie wszystkich Przyjaciół posiadanych przez tego Poszukiwacza.',
                'Kiedy badasz karty Przyjaciół, ich numer spotkania wynosi 1.'
            ],
            'note' => 'Obszar startowy: Oaza Charakter: Neutralny',
            'card' => Layer::CARD_HERO,
            'strenght' => 4,
            'craft' => 3,
            'life' => 4,
            'fate' => 2
        ]
    ];
}
