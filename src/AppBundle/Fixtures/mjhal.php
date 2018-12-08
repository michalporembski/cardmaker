<?php

namespace AppBundle\Fixtures;

use CardMakerBundle\Entity\Layer;

class mjhal
{
    const CARDS = [
        // Karty Bestii
        [
            'name' => 'Młode',
            'caption' => 'Siła 3',
            'tag' => 'Wróg - Potwór',
            'desc' => 'Poszukiwacz który je pokona, zaraz po stoczeniu walki musi dociągnąć kolejną kartę bestii i ją rozpatrzyć.',
            'card' => Layer::CARD_ADVENTURES,
            'level' => 3
        ],
        [
            'name' => 'Smok',
            'caption' => 'Siła 7',
            'tag' => 'Wróg - Potwór',
            'desc' => 'Smok pozostanie tu dopuki ktoś go nie pokona.',
            'card' => Layer::CARD_ADVENTURES,
            'level' => 3
        ],
    ];
}