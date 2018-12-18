<?php

namespace AppBundle\Fixtures;

use CardMakerBundle\Entity\Layer;

class Characters
{
    const BIG_CARDS = [
        [
            'front' => './charaktery/character/druid.png',
            'back' => Layer::CARD_HERO,
        ],
        [
            'front' => './charaktery/character/dragon_rider.png',
            'back' => Layer::CARD_HERO,
        ],
    ];

    const CARDS = [
        [
            'name' => 'Szlachetny',
            'story' => 'Twoje szlachetne serce potrafi stawić opór przeznaczeniu i je odmienić.',
            'desc' => 'Możesz ujawnić swój Charakter w momencie, gdy miałbyś stracić Przyjaciela. Zapobiegniesz utracie Przyjaciela.' . "\n---\n" . 'Za każdym razem gdy miałbyś utracić Przyjaciela, zamiast tego możesz odrzucić punkt Życia.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Pobożny',
            'story' => 'Niebiosa poznały się na Twoim czystym sercu.',
            'desc' => 'Za każdym razem gdy się modlisz, możesz dodać 1 do wyniku rzutu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Pokorny',
            'story' => 'Wielka wiara jest w Twym sercu. Każda Twoja porażka nie pójdzie na marne.',
            'desc' => 'Za każdym razem gdy przegrasz lub zremisujesz jakąkolwiek Walkę odzyskujesz punkt Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Męczeński',
            'story' => 'Droga do chwały prowadzi przez cierpienie. Wreszcie udało Ci się to pojąć.',
            'desc' => 'Za każdym razem gdy stracisz przynajmniej 1 punkt Życia zyskujesz punkt Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Pomocny',
            'story' => 'Braterstwo wobec innych!',
            'desc' => 'Za każdym razem gdy inny Poszukiwacz przebywający w tej samej Krainie, co ty, wda się w walkę z Wrogiem, możesz go wspomóc. Przenieś się na obszar zajmowany przez tego Poszukiwacza i dodaj swoją początkową wartość Siły do jego skuteczności ataku. Jeśli Wróg zostanie zabity, odzyskujesz punkt Losu i tracisz następną turę.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Sprawiedliwy',
            'story' => 'Twoje czyny zjednały Ci przychylność niebios. Na nic się zdadzą złorzeczenia twych wrogów.',
            'desc' => 'Twoich rzutów kością nie da się przerzucać punktami ciemnej strony Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Miłosierny',
            'story' => 'Tylko okazując łaskę naprawdę zwyciężamy.',
            'desc' => 'Gdy pokonasz w jakiejkolwiek walce innego Poszukiwacza, możesz zrezygnować z nagrody. Zyskasz wtedy punkt Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Życzliwy',
            'story' => 'Jesteś życzliwy dla innych, a inni dla Ciebie.',
            'desc' => 'Na obszarach Wioski, Miasta i Zamku, możesz odzyskać 1 punkt Życia za darmo.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Ascetyczny',
            'story' => 'Wszelkie dobra tego świata są niczym w obliczu sił przeznaczenia.',
            'desc' => 'Na początku swojej tury, możesz odrzucić dowolny Przedmiot (nawet przeklęty), aby zyskać punkt Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Pełen wigoru',
            'story' => 'Jest w Tobie dużo sił witalnych!',
            'desc' => 'Zawsze gdy wymieniasz trofea na punkty Siły, możesz odzyskać 1 punkt Życia.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Przyjacielski',
            'story' => 'Z każdym potrafisz się zaprzyjaźnić',
            'desc' => 'Za każdym razem gdy dołączy do ciebie Przyjaciel odzyskujesz 1 punkt Losu.' . "\n---\n" . 'Za każdym razem gdy badasz obszar na którym znajdują się jacyś Przyjaciele, posiadają oni numer spotkania 1.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Błogosławiony',
            'story' => 'Niebiosa nas prowadzą.',
            'desc' => 'Przed wykonaniem rzutu jedną kością, możesz zdecydować się odrzucić punkt jasnej strony Losu. Rzuć wtedy dwoma kośćmi i wybierz wynik, który ci się podoba.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Waleczny',
            'story' => 'Stawisz czoła każdemu przyciwnikowi.',
            'desc' => 'Za każdym razem, kiedy wdajesz się w walkę z Wrogiem lub Poszukiwaczem, którego Siła jest wyższa niż twoja Siła, możesz dodac 1 do skuteczności swojego ataku.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Heroiczny',
            'story' => 'Odwagi Ci nie brak.',
            'desc' => 'Za każdym razem, kiedy wdajesz się w jakąkolwiek walkę z conajmniej dwoma Wrogami, dodaj 1 do skuteczności twojego ataku.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Niestrudzony',
            'story' => 'Do boju, bez chwili wythnienia!',
            'desc' => 'Zamiast rzucać kością za ruch, możesz przesunąć się na dowolny, najbliższy inny obszar w twojej Krainie, na którym znajduje się Wróg.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Obłudny',
            'story' => 'Oszukać naiwnych jest naprawdę prosto.',
            'desc' => 'Przed odbyciem każdego spotkania z Poszukiwaczem, Nieznajomym, Wrogiem bądź Mieszkańcem, możesz określić Charakter z jakim będziesz rozpatrywał to spotkanie.' . "\n---\n" . "Możesz zignorować efekt nakazujący zmianę Charakteru.",
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Sadystyczny',
            'story' => 'Ludzie nie doceniają radości jaką niesie wsłuchiwanie się w ludzkie cierpienie.',
            'desc' => 'Za każdym razem gdy odbierzesz innemu Poszukiwaczowi punkt Życia, możesz odzyskać punkt ciemnej strony Losu.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Zepsuty',
            'story' => 'Każde życie ma wielką moc. A Ty potrafisz wydobyć tę moc.',
            'desc' => 'Na początku swojej tury, możesz odprawić rytuał. Odrzuć wtedy wybranego Przyjaciela i wylosuj Zaklęcie o ile pozwala ci na to Moc.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Haniebny',
            'story' => 'Cel uświęca środki.',
            'desc' => 'Gdy inny Poszukiwacz będzie miał wykonać rzut jedną kością, możesz zdecydować się odrzucić punkt ciemnej strony Losu, musi on wtedy rzuć dwoma kośćmi, a ty wybierasz wynik.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Nieuczciwy',
            'story' => 'Zdrada nie jest Ci obca.',
            'desc' => 'Ujawniając kartę Charakteru, odzyskujesz wszystkie punkty Losu.' . "\n---\n" . 'Gdy wykorzystujesz punkt ciemnej strony Losu, możesz przerzucić dowolną ilość kości.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Żądny Mocy',
            'story' => 'Tylko moc, i nic więcej.',
            'desc' => 'Ujawniając kartę Charakteru, możesz odrzucić 2 punkty Życia, aby otrzymać punkt Mocy.' . "\n---\n" . 'W walce psychicznej dodaj 1 do skuteczności swojego ataku.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Żądny Magii',
            'story' => 'Dla niej możesz przekląć samego siebie.',
            'desc' => 'Ujawniając kartę Charakteru, limit posiadanych przez Ciebie Zaklęć zostanie zwiększony o 1, musisz jednak odrzucić 2 punkty Losu lub Życia.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Szyderczy',
            'story' => 'Słabsi się nie liczą.',
            'desc' => 'Podczas jakiejkolwiek walki, możesz zdecydować się zakpić sobie z wroga, rzuć wtedy dwoma kośćmi i wybierz mniejszy wynik. To będzie twoja premia do skuteczności ataku. Jeżeli wygrasz walkę odzyskasz punkt ciemnej strony Losu. W takiej walce nie możesz użyć Losu.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Okrutny',
            'story' => 'Wiesz dobrze jak ranić innych.',
            'desc' => 'Gdy pokonasz Poszukiwacza w jakiejkolwiek walce, możesz odebrać mu 2 punkty Życia zamiast jednego.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Chciwy',
            'story' => 'Złoto to zawsze najlepsza nagroda.',
            'desc' => 'Gdy pokonasz w jakiejkolwiek walce innego Poszukiwacza i zdecydujesz się odebrać mu Przedmiot, możesz też odebrać mu 1 sztukę złota.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Pamiętliwy',
            'story' => 'Przeklinam was wszystkich!',
            'desc' => 'Gdy zostaniesz pokonany w jakiejkolwiek walce przez innego Poszukiwacza, musi on odrzucić punkt Losu.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Złorzeczący',
            'story' => 'Poświęcisz wiele, aby zobaczyć nieszczęście innych!',
            'desc' => 'Gdy inny Poszukiwacz będzie chciał odrzucić punkt Losu, aby ponowić rzut kością, możesz odrzucić punkt Mocy i Losu, aby temu zapobiec.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Wściekły',
            'story' => 'Zarżnąć ich!',
            'desc' => 'Podczas walki, po wykonaniu rzutu, możesz odrzucić punkt Życia, aby do swojej skuteczności dodać 1.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Mizantropiczny',
            'story' => 'Wszyscy zasługują na śmierć.',
            'desc' => 'Odbywając spotkanie z Nieznajomym, możesz potraktować jego kartę jakby był Wrogiem o Sile 0. Rzuć trzema kośćmi, aby określić skuteczność ataku Nieznajomego. Jeżeli wygrasz, a skuteczność ataku Nieznajomego osiągnie 10, jako nagrodę otrzymasz punkt Siły.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Nieufny',
            'story' => 'Nikomu nie ufaj.',
            'desc' => 'Żaden z twoich Przyjaciół nigdy cie nie zaatakuje, nigdy też nie stracisz przedmiotu ani złota z powodu Przyjaciela. Żaden Przyjaciel nie przyłączy się do ciebie wbrew twojej woli.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Tchórzliwy',
            'story' => 'Dorze jest być odważnym, ale jeszcze lepiej być żywym.',
            'desc' => 'Ujawniając kartę Charakteru, przed walką, możesz się wymknąć.' . "\n---\n" . 'Przed każdą walką, możesz spróbować uciec. Rzuć kością, jeżeli uzyskasz 5 lub 6 uda ci się.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Chaotyczny',
            'story' => 'Nawet niebiosa nie wiedzą, jak Cię ocenić.',
            'desc' => 'Na początku każdej tury, możesz odzyskać punkt Losu. Nie, możesz używać punktów jasnej strony Losu, ale, możesz je odrzucać.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Ambitny',
            'story' => 'Zawsze chcesz zwyciężać, nigdy jednak nie posuniesz się do przeklinania swych wrogów.',
            'desc' => 'Ujawniając swój Charakter otrzymujesz 2 punkty Losu.' . "\n---\n" . 'Każdy twój rzut kością, możesz przerzucić drugi raz za pomocą Losu. Nie możesz używać ciemnej strony Losu. Wszystkie posiadane punkty Losu musisz przewracać na jasną stronę.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Nieustępliwy',
            'story' => 'Nigdy nie pogodzisz się z porażką.',
            'desc' => 'Jeżeli przegrasz lub zremisujesz jakąkolwiek walkę, możesz odrzucić punkt jasnej strony Losu, aby zignorować jej wynik i natychmiast stoczyć walkę na nowo. Musisz zaakceptować wynik drugiej walki.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Spostrzegawczy',
            'story' => 'Dużo można wyczytać z ludzi których codziennie mijamy.',
            'desc' => 'Możesz podglądać Zaklęcia i karty Charakteru Poszukiwaczy którzy wylądują na twoim Obszarze, lub gdy ty zakończysz ruch na ich Obszarze.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Budzący Zwątpienie',
            'story' => 'Czym jest dobro, a czym zło?',
            'desc' => 'Każdemu napotkanemu Poszukiwaczowi, możesz odwrócić wybrane punkty Losu.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Roztropny',
            'story' => 'Pośpiech się nie sprawdza.',
            'desc' => 'Po wykonaniu rzutu za ruch, możesz odjąć 1 od uzyskanego wyniku, do minimum 1.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Twardy',
            'story' => 'Zagryź zęby i wytrzymaj.',
            'desc' => 'Jeżeli na skutek przegranej walki psychicznej tracisz Życie, możesz rzucić kością. Jeśli wynik to 5 lub 6, nie tracisz Życia (jednak nadal przegrywasz walkę psychiczną).',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Żądny Przygód',
            'story' => 'Wyzwania!',
            'desc' => 'Za każdym razem gdy wylosujesz kartę Przygody, która jest Wrogiem, możesz wylosować dodatkową kartę. Możesz tego dokonać tylko raz na turę.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Charyzmatyczny',
            'story' => 'Ludzie Cię podziwiają i uwielbiają. Zupełnie nie wiadomo czemu.',
            'desc' => 'Gdy pokonasz w jakiejkolwiek walce innego Poszukiwacza, możesz zdecydować się nie odbierać mu sztuk złota, punktów Życia ani Przedmiotu, zamiast tego możesz odebrać mu wybranego Przyjaciela.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Żałosny',
            'story' => 'Niepotrafisz nawet przegrać z godnością',
            'desc' => 'Gdy zostaniesz pokonany w jakiej kolwiek walce przez Dobrego lub Neutralnego Poszukiwacza, będzie on musiał zmienić Charakter na Zły.' . "\n---\n" . 'Rozpatrując karty Wrogów sam decydujesz jaki mają numer spotkania.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Wytrwały',
            'story' => 'Nie poddajesz się tak łatwo.',
            'desc' => 'Aby pokonać cię w Walce przeciwnik musi uzyskać skuteczność ataku większą o 2. Jeżeli przewaga będzie mniejsza, walka kończy się remisem.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Pokutny',
            'story' => 'Piętno dawnych przewinień w końcu odmieniło Twe serce.',
            'desc' => 'Gdy będziesz musiał odrzucić tę kartę Charakteru odzyskasz wszystkie punkty Życia i punkty Losu. Niezależnie od polecenia wylosuj kartę Dobrego Charakteru.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Zachłanny',
            'story' => 'Zawsze chcesz posiadać więcej!',
            'desc' => 'Za każdym razem gdy badasz obszar zawierający jakieś Przedmioty, te posiadają numer spotkania 1.' . "\n---\n" . 'Możesz nieść o 1 przedmiot więcej.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Przeszywające Widzenie',
            'tag' => 'Zaklęcie',
            'desc' => 'Możesz rzucić to Zaklęcie w dowolnym momencie na dowolnego Poszukiwacza. Podglądnij jego Zaklęcia i kartę Charakteru.',
            'card' => Layer::CARD_SPELL,
            'image' => './charaktery/spell0.png',
        ],
        [
            'name' => 'Pieczęć Stałości',
            'caption' => 'Aura',
            'tag' => 'Zaklęcie',
            'desc' => 'Możesz rzucić to Zaklęcie w dowolnym momencie na dowolnego Poszukiwacza. Od tej pory może ignorować wszystkie efekty zmieniające Charakter.',
            'card' => Layer::CARD_SPELL,
            'image' => './charaktery/spell1.png',
        ],
        [
            'name' => 'Prawdziwa Natura',
            'tag' => 'Zaklęcie',
            'desc' => 'Możesz rzucić to Zaklęcie w dowolnym momencie na dowolnego Poszukiwacza. Musi on natychmiast ujawnić swoją kartę Charakteru.',
            'card' => Layer::CARD_SPELL,
            'image' => './charaktery/spell3.jpg',
        ],
        [
            'name' => 'Zamiana Dusz',
            'tag' => 'Zaklęcie',
            'desc' => 'Możesz rzucić to Zaklęcie w dowolnym momencie na dowolnego Poszukiwacza. Odbierz mu jego kartę Charakteru i przekaż swoją.',
            'card' => Layer::CARD_SPELL,
            'image' => './charaktery/spell5.jpg',
        ],
        [
            'name' => 'Wieczysta Przysięga',
            'caption' => 'Aura',
            'tag' => 'Zaklęcie',
            'desc' => 'Możesz rzucić to Zaklęcie w dowolnym momencie na dowolnego Poszukiwacza. Za każdym razem gdy ma on odrzucić kartę Charakteru zamiast tego musi odrzucić punkt Życia.',
            'card' => Layer::CARD_SPELL,
            'image' => './charaktery/spell6.jpg',
        ],
        [
            'name' => 'Ochrona Duszy',
            'tag' => 'Zaklęcie',
            'desc' => 'Możesz rzucić to Zaklęcie na dowolnego Poszukiwacza który właśnie ma zmienić Charakter, aby temu zapobiec.',
            'card' => Layer::CARD_SPELL,
            'image' => './charaktery/spell7.jpg',
        ],
        [
            'name' => 'Rytułał Księżyca',
            'tag' => 'Zaklęcie',
            'desc' => 'Możesz rzucić to Zaklęcie w trakcie działania dowolnego Zdarzenia. Efekt Zdażenia zostanie wydłużony o jedną turę.',
            'card' => Layer::CARD_SPELL,
            'image' => './charaktery/spell12.jpg',
        ],
//        [
//            'name' => 'Magiczny Archiwista',
//            'places' => ['Zamek', 'Miasto'],
//            'desc' => 'Odrzuć dowolne ze swoich Zaklęć, aby otrzymać 1 sztukę złota.',
//            'card' => Layer::CARD_DENIZEN,
//        ],
//        [
//            'name' => 'Ekscetryczny Kolekcjoner',
//            'places' => ['Zamek', 'Miasto'],
//            'desc' => 'Ekscentryczny Kolejconer oferuje ci 2 sztuki złota za każdy Magiczny Przedmiot, jeżeli przedmiot jest przeklęty dostaniesz za niego 3 sztuki złota.',
//            'card' => Layer::CARD_DENIZEN,
//        ],
//        [
//            'name' => 'Handlarz Niewolników',
//            'places' => ['Miasto', 'Gospoda', 'Wioska'],
//            'desc' => 'Handlarz Niewolników oferuje ci 1 sztukę złota za każdego Przyjaciela. Jeżeli zdecydujesz się sprzedać któregoś z przyjaciół twój Charakter zmieni się na Zły.',
//            'card' => Layer::CARD_DENIZEN,
//        ],
//        [
//            'name' => 'Ekspert od Demolki',
//            'places' => ['Miasto', 'Gospoda', 'Wioska'],
//            'desc' => 'Ekspert od Demolki za 1 sztukę złota oferuje ci usunięcie z mapy wysadzenie dowolnego miejsca w tej krainie. Jeżeli się na to zdecydujesz wybierz odkrytą kartę miejsca i usuń ją z mapy.',
//            'card' => Layer::CARD_DENIZEN,
//        ],
        [
            'name' => 'Jasnowidz',
            'places' => ['Zamek', 'Miasto', 'Wioska'],
            'desc' => 'Jasnowidz za 1 sztukę złota oferuje ci pokazać kim mógłbyś być. Wylosuj po 1 karcie Charakteru każdego typu, jedna z nich, może być twoim nowym Charakterem.',
            'card' => Layer::CARD_DENIZEN,
        ],
        [
            'name' => 'Talizman Wytrwałości',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Tylko posiadając jeden z legendarnych Talizmanów, możesz wkroczyć do Doliny Ognia.' . "\n---\n" . 'Nie możesz zmienić Charakteru wbrew swojej woli. Za każdym razem, gdy jakiś efekt nakaże ci zmienić Charakter zyskujesz punkt Życia.',
            'card' => Layer::CARD_TALISMAN,
            'image' => './charaktery/talisman8.jpg',
            'level' => 5
        ],
        //        [
        //            'name' => 'Talizman Magii',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów, możesz wkroczyć do Doliny Ognia.' . "\n---\n" . 'Zawsze musisz posiadać przynajmniej jedno Zaklęcie (za każdym razem, kiedy wykorzystasz swoje ostatnie Zaklęcie, losuje nowe).',
        //            'card' => Layer::CARD_TALISMAN,
        //            'image' => './charaktery/talisman7.jpg',
        //            'level' => 5
        //        ],
        //        [
        //            'name' => 'Talizman Bogactwa',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów, możesz wkroczyć do Doliny Ognia.' . "\n---\n" . 'Na początku każdej swojej tury może otrzymać jedną Sztukę Złota.',
        //            'card' => Layer::CARD_TALISMAN,
        //            'image' => './charaktery/talisman6.jpg',
        //            'level' => 5
        //        ],
        //        [
        //            'name' => 'Talizman Zachłanności',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów, możesz wkroczyć do Doliny Ognia.' . "\n---\n" . 'Za każdym razem gdy otrzymując Złoto, możesz dobrać o jedną Sztukę Złota więcej.',
        //            'card' => Layer::CARD_TALISMAN,
        //            'image' => './charaktery/talisman5.jpg',
        //            'level' => 5
        //        ],
        //        [
        //            'name' => 'Talizman Szczęścia',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów, możesz wkroczyć do Doliny Ognia.' . "\n---\n" . 'Na początku każdej swojej tury może odzyskać jedn punkt Losu.',
        //            'card' => Layer::CARD_TALISMAN,
        //            'image' => './charaktery/talisman4.jpg',
        //            'level' => 5
        //        ],
        //        [
        //            'name' => 'Talizman Nikeczemności',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'Tylko posiaddając jeden z legendarnych Talizmanów, możesz wkroczyć do Doliny Ognia.' . "\n---\n" . 'Przebywając w Krainie Wewnętrznej, na początku każdej swojej tury, możesz wybrać Poszukiwacza który straci 1 punkt Życia.',
        //            'card' => Layer::CARD_TALISMAN,
        //            'image' => './charaktery/talisman3.jpg',
        //            'level' => 5
        //        ],
        [
            'name' => 'Dzień Nawrócenia',
            'tag' => 'Księżycowe Zdarzenie',
            'desc' => 'Po odkryciu tej karty, odwróć kartę Czasu na stronę Dnia.' . "\n---\n" . 'Na początku swojej tury, każdy Zły i Neutralny poszukiwacz może stać się Dobry.' . "\n---\n" . 'Odrzuć tę kartę, kiedy zapada Noc.',
            'card' => Layer::CARD_ADVENTURES,
            'image' => './charaktery/grace.png',
            'level' => 1
        ],
        [
            'name' => 'Noc Zwątpienia',
            'tag' => 'Księżycowe Zdarzenie',
            'desc' => 'Po odkryciu tej karty, odwróć kartę Czasu na stronę Nocy.' . "\n---\n" . 'Na końcu swojej tury, każdy Dobry i Neutralny poszukiwacz może stać się Zły.' . "\n---\n" . 'Odrzuć tę kartę, kiedy wstaje Dzień.',
            'card' => Layer::CARD_ADVENTURES,
            'image' => './charaktery/fear.jpg',
            'level' => 1
        ],
        [
            'name' => 'Festiwal Równowagi',
            'tag' => 'Księżycowe Zdarzenie',
            'desc' => 'Po odkryciu tej karty, odwróć kartę Czasu na stronę Nocy.' . "\n---\n" . 'Żaden Poczukiwacz nie może zmienić Charakteru. Wszystkie efekty zmiany Charakteru należy ignorować.' . "\n---\n" . 'Odrzuć tę kartę, kiedy wstaje Dzień.',
            'card' => Layer::CARD_ADVENTURES,
            'image' => './charaktery/elf_dance.jpg',
            'level' => 1
        ],
        // + przedmiot który zapobiega zmianie charakteru
        // + przeklęty przedmiot który zapobiega zmianie charakteru
        // + przyjaciel który zapobiega zmianie charakteru
        // + przeklęty przyjaciel który zapobiega zmianie charakteru
        // księżycowe zdarzenie które zabierze neutralnym graczą punkt życia
        [
            'name' => 'Mikstura Amnezji',
            'caption' => 'Drobiazg',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'W dowolnej chwili, możesz odrzucić Miksturę Amnezji oraz swoją kartę Charakteru, aby wylosować nową kartę wybranego prze ciebie Charakteru.',
            'card' => Layer::CARD_POTION,
            'image' => './charaktery/potion1.jpg',
            'level' => 5
        ],
        [
            'name' => 'Mikstura Wytrwałości',
            'caption' => 'Drobiazg',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'W dowolnej chwili, możesz odrzucić Miksturę Wytrwałości, aby zapobiec zmianie Charakteru.',
            'card' => Layer::CARD_POTION,
            'image' => './charaktery/potion3.jpg',
            'level' => 5
        ],
        [
            'name' => 'Dobry Duszek',
            'tag' => 'Przyjaciel',
            'desc' => 'Dobry Duszek nigdy nie przyłączy się do Złego Poszukiwacza.' . "\n---\n" . 'Ignorujesz wszelkie efekty nakazujące zmianę Charakteru na Zły lub Neutralny.',
            'card' => Layer::CARD_WOODLAND,
            'image' => './charaktery/pixie.jpg',
            'level' => 5
        ],
        [
            'name' => 'Kusicielka',
            'caption' => 'Przeklęty',
            'tag' => 'Przyjaciel',
            'desc' => 'Kusicielka nigdy nie przyłączy się do Złego Poszukiwacza.' . "\n---\n" . 'Pod koniec każdej tury wylosuj kartę Charakteru, możesz ją zachować odrzucając swoją aktualną kartę Charakteru. Gdy się na to zdecyujesz porzuć Kusicielkę na obszarze na którym się znajdujesz.',
            'card' => Layer::CARD_WOODLAND,
            'image' => './charaktery/sukkub.jpg',
            'level' => 5
        ],
        [
            'name' => 'Kostur Druida',
            'caption' => 'Broń',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'W dowolnym momencie, możesz odrzucić punkt Losu, aby zmienić swój Charakter.',
            'card' => Layer::CARD_WOODLAND,
            'image' => './charaktery/druid_staff.png',
            'level' => 5
        ],
        [
            'name' => 'Gnieworodny Satyr',
            'tag' => 'Wróg - Potwór',
            'caption' => 'Siła 4',
            'caption_type' => 2,
            'desc' => 'Na tym obszarze grasuje Gnieworodny Satyr. Jeżeli z nim przegra, Dobry i Neutralny Poszukiwacz, oprócz utraty 1 punktu Życia będziesz musiał zmienić Charakter na zły.',
            'card' => Layer::CARD_UNHALLOWED2,
            'image' => './charaktery/satyr1.jpg',
            'level' => 2
        ],
        [
            'name' => 'Widzący Mędrzec',
            'tag' => 'Przyjaciel',
            'desc' => 'Jeżeli zakończysz ruch na obszarze na którym znajduje się inny Poszukiwacz, możesz podglądnąć jego kartę Charakteru.',
            'card' => Layer::CARD_ADVENTURES,
            'image' => './charaktery/wiseman.jpg',
            'level' => 5
        ],
        [
            'name' => 'Lustro Spaczenia',
            'tag' => 'Miejsce',
            'desc' => 'Na twojej drodze pojawiło się Lustro Spaczenia, jeżeli zdecydujesz się przez nie przejść, będziesz mógł natychmiast wykonać dodatkową turę, będziesz jednak musiał zmienić Charakter na Zły. Kiedy ktoś skożysta z Lustra Spaczenia to rozpadnie się i trafi na stos kart odrzuconych.',
            'card' => Layer::CARD_DUNGEON,
            'image' => './charaktery/evil_mirror.jpg',
            'level' => 6
        ],
        [
            'name' => 'Księga Charakterów',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Po wylosowaniu Księgi Charakterów połóż na niej 3 karty Charakteru, po jednej każdego typu. W dowolnym momencie, możesz odrzucić swoją kartę Charakteru i wziąść jedną kartę z Księgi Charakteru, od tej pory to będzie twój Charakter. Kiedy nie będzie już kart Charakteru na tej karcie, odrzuć ją.',
            'card' => Layer::CARD_RELICT,
            'image' => './charaktery/book2.jpg',
            'level' => 5
        ],
        [
            'name' => 'Złodziej Duszy',
            'caption' => 'Broń',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Podczas walki Złodziej Duszy dodaje 2 punkty do twojej Siły. Jeżeli pokonasz Poszukiwacza, możesz mu odebrać kartę Charakteru i zmusić go do wylosowania nowej. Swoją poprzednią kartę Charakteru musisz odrzucić.',
            'card' => Layer::CARD_TREASURE,
            'image' => './charaktery/sword3.jpg',
            'level' => 5
        ],
        [
            'name' => 'Zatruwacz Serc',
            'caption' => 'Broń',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Podczas walki Zatruwacz Serc dodaje 1 punkty do twojej Siły. Jeżeli pokonasz Poszukiwacza, możesz go zmusić do odrzucenia karty Charakteru i przekazać swoją kartę Charakteru. Następnie wylosuj kartę dowolnego Charakteru.',
            'card' => Layer::CARD_REMNANT,
            'image' => './charaktery/sword1.jpg',
            'level' => 5
        ],
        [
            'name' => 'Anielska Pieczęć',
            'tag' => 'Magiczny Przedmiot',
            'desc' => 'Jeżeli pokonasz Złego lub Neutralnego Poszukiwacza w jakiejkolwiek walce, oprócz zwykłęj nagrody, możesz zmienić jego Charakter na dobry.',
            'card' => Layer::CARD_HARBINGER,
            'image' => './charaktery/seal2.png',
            'level' => 5
        ],
        [
            'name' => 'Wędrowna Cyganka',
            'tag' => 'Nieznajomy',
            'desc' => 'Wędrowna Cyganka oferuje ci możliwość poznania Zaklęć i Charakteru wybranego poszukiwacza, jeżeli zapłacisz jej sztukę złota.',
            'card' => Layer::CARD_HIGHLAND,
            'image' => './charaktery/gypsy3.jpg',
            'level' => 4
        ],
        [
            'name' => 'Widzący Duch',
            'tag' => 'Nieznajomy',
            'desc' => 'Napotkałeś Ducha który przjżał cię na wskroś. Ujawnij swoją kartę Charakteru lub odrzuć punkt Życia. Następnie Widzący Duch udaje się na stos kart odrzuconych.',
            'card' => Layer::CARD_BRIDGE,
            'image' => './charaktery/ghost1.jpg',
            'level' => 4
        ],
        [
            'name' => 'Strudzona Zmora',
            'tag' => 'Wróg - Duch',
            'caption' => 'Moc 1',
            'caption_type' => 2,
            'desc' => 'Strudzona Zmora nęka żywych w tej okolicy. Jeżeli z nią przegrasz oprócz utraty 1 punktu Życia będziesz musiał ujawnić swoją kartę Charakteru.',
            'card' => Layer::CARD_TUNEL,
            'image' => './charaktery/wraith1.jpg',
            'level' => 3
        ],
    ];
}

/* Druid:
Rozpoczynasz grę posiadając jedno Zaklęcie.

W dowolnym momencie możesz odrzucić
punkt Losu aby zmienić swój Charakter.

Kiedy znajdziesz się na obszarze Puszczy,
możesz dobrać tyle Zaklęć, na ile pozwala
ci wartość twojej Mocy.

Smocza Amazonka:

Za każdym razem, kiedy wdajesz się
w walkę lub walkę psychiczną ze Smokiem,
dodaj 3 do swojego rzutu ataku.

Jeżeli pokonasz Smoka, możesz go dosiąść
zamiast zachować go jako trofeum
możesz dobrać kartę Smoka z tali Stajni

1. Przygotowanie:
Przed rozpoczęciem rozgrywki, po wylosowaniu postaci każdy gracz dobiera 2 karty charakteru odpowiadające charakterowi jego postaci. Musi wybrać z pośród nich jedną, drugą zaś odrzucić. Wylosowaną kartę zachować rewersem do góry. Gracz nie ujawnia zdolności wynikającej z jego charakteru.

2. Ujawnienie Charakteru:
W momencie gdy gracz będzie chciał skorzystać z umiejętności wynikającej z karty charakteru musi odwrócić tę kartę ujawniając ją. Od tej pory wszyscy gracze znają jego charakter. Należy pamiętać o tym że niektóre karty charakteru dają jednorazowy efekt, oraz o tym że niektóre karty charakteru nakładają ograniczenie na gracza. Ograniczenia działać będą dopiero po ujawnieniu karty charakteru.

Objaśnienie:
Dodatek ma ułatwiać grę słabszym graczą.

Karty charakteru mają stanowić pewnego rodzaju asy z rękawa. Gracz nie powinien nie roztropnie ich ujawniać, gracze którzy zbyt długo nie ujawniają swojej karty charakteru powinni wzbudzać podejrzenia.

Ponad to z gry trzeba usunąć wszystkie karty które dawałby możliwość niekontrolowanej zmiany charakteru, np postać Druida lub Kostur Druida.


*/
