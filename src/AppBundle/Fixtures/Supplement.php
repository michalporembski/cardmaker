<?php

namespace AppBundle\Fixtures;

use CardMakerBundle\Entity\Layer;

class Supplement
{
    const CARDS = [
        [
            'name' => 'Magiczny Archiwista',
            'places' => ['Zamek','Miasto'],
            'desc' => 'Odrzuć dowolne ze swoich zaklęć aby otrzymać 1 sztukę złota',
            'card' => Layer::CARD_DENIZEN,
        ],
        [
            'name' => 'Ekscetryczny Kolekcjoner',
            'places' => ['Zamek','Miasto'],
            'desc' => 'Ekscentryczny Kolejconer oferuje ci 2 sztuki złota za każdy Magiczny Przedmiot, jeżeli przedmiot jest przeklęty dostaniesz za niego 3 sztuki złota.',
            'card' => Layer::CARD_DENIZEN,
        ],
        [
            'name' => 'Handlarz Niewolników',
            'places' => ['Miasto','Gospoda','Wioska'],
            'desc' => 'Łowca Niewolników oferuje ci 1 sztukę złota za każdego przyjaciela. Jeżeli zdecydujesz się sprzedać któregoś z przyjaciół twój charakter zmieni się na zły.',
            'card' => Layer::CARD_DENIZEN,
        ],
        [
            'name' => 'Ekspert od Demolki',
            'places' => ['Miasto','Gospoda','Wioska'],
            'desc' => 'Ekspert od Demolki za 1 sztukę złota oferuje ci usunięcie z mapy wysadzenie dowolnego miejsca w tej krainie. Jeżeli się na to zdecydujesz wybierz odkrytą kartę miejsca i usuń ją z mapy.',
            'card' => Layer::CARD_DENIZEN,
        ],
        [
            'name' => 'Wrota Przyszłości 1',
            'caption' => 'Runiczne Wrota',
            'tag' => 'Miejsce',
            'desc' => 'Podczas swojej następnej tury, zamiast normalnego ruchy możesz się przenieść na dowolne, lub inne odkryte Runiczne Wrota lub dowolny obszar Runów. Kiedy ktoś skorzysta z Runicznych Wrót, znikają one na stosie kart odrzuconych.',
            'card' => Layer::CARD_ADVENTURES,
            'level' => 6
        ],
    ];
}