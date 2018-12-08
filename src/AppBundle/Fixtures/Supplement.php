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
            'name' => 'Talizman Magii',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów możesz wkroczyć do Doliny Ognia.
Zawsze musisz posiadać przynajmniej jedno Zaklęcie (za każdym razem, kiedy wykorzystasz swoje ostatnie Zaklęcie, losuje nowe).',
            'card' => Layer::CARD_TALISMAN,
            'level' => 5
        ],
        [
            'name' => 'Talizman Bogactwa',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów możesz wkroczyć do Doliny Ognia.
Na początku każdej swojej tury może otrzymać jedną Sztukę Złota.',
            'card' => Layer::CARD_TALISMAN,
            'level' => 5
        ],
        [
            'name' => 'Talizman Zachłanności',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów możesz wkroczyć do Doliny Ognia.
Za każdym razem gdy otrzymując Złoto możesz dobrać o jedną Sztukę Złota więcej.',
            'card' => Layer::CARD_TALISMAN,
            'level' => 5
        ],
        [
            'name' => 'Talizman Szczęścia',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów możesz wkroczyć do Doliny Ognia.
Na początku każdej swojej tury może otrzymać jedn Punkt Losu.',
            'card' => Layer::CARD_TALISMAN,
            'level' => 5
        ],
        [
            'name' => 'Talizman Nikeczemności',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów możesz wkroczyć do Doliny Ognia.
Przebywając w Krainie Wewnętrznej, na początku każdej swojej tury może wybrać Poszukiwacza który straci 1 Punkt Życia.',
            'card' => Layer::CARD_TALISMAN,
            'level' => 5
        ],
        [
            'name' => 'Wierzchowiec',
            'desc' => 'Możesz użyć tej akcji przed wykonaniem rzutu za ruch, weź dowolną odkrytą kartę wierzchowca znajdującą się w tej krainie.


Możesz rzucić to zaklęcie w dowolnym momencie, zbierz wszystkich wrogów, ze wszystkich stosów kart odrzuconych, potasuj ich i umieść na szczytach odpowiednich stosów kart przygód.


Możesz rzucić to zaklęcie na początku swojej tury, rzuć dwiema kośmi i wylosuj tyle kart duchów ile wynosi suma oczek. Umieść Duchy na wybranych przez Ciebie polach krainy w której się znajdujesz.',
            'card' => Layer::CARD_QUEST_REWARD,
        ],
    ];
}