<?php

namespace AppBundle\Fixtures;

use CardMakerBundle\Entity\Layer;

class Characters
{
    const CARDS = [
        [
            'name' => 'Dobry: Szlachetny',
            'story' => 'Twoje szlachetne serce potrafi stawić opór przeznaczeniu i je odmienić.',
            'desc' => 'Za każdym razem gdy miałbyś utracić przyjaciela, zamiast tego możesz odrzucić punkt Życia.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Dobry: Pobożny',
            'story' => 'Niebiosa poznały się na Twoim czystym sercu.',
            'desc' => 'Za każdym razem gdy się modlisz możesz dodać 1 do wynik rzutu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Dobry: Pokorny',
            'story' => 'Wielka wiara jest w Twym sercu. Każda Twoja porażka nie pójdzie na marne.',
            'desc' => 'Za każdym razem gdy przegrasz lub zremisujesz jakąkolwiek Walkę odzyskujesz Żeton Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Dobry: Męczeński',
            'story' => 'Droga do chwały prowadzi przez cierpienie. Wreszcie udało Ci się to pojąć.',
            'desc' => 'Za każdym razem gdy stracisz punkt Życia zyskujesz punkt Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Dobry: Pomocny',
            'story' => 'Braterstwo wobec innych!',
            'desc' => 'Za każdym razem gdy inny Poszukiwacz przebywający w tej samej Krainie, co ty, wda się w walkę z Wrogiem możesz go wspomóc. Przenieś się na obszar zajmowany przez tego Poszukiwacza i dodaj swoją początkową wartość Siły do jego skuteczności ataku. Jeśli Wróg zostanie zabity otrzymujesz Żeton Losu i tracisz następną turę.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Dobry: Sprawiedliwy',
            'story' => 'Twoje czyny zjednały Ci przychylność niebios. Na nic się zdadzą złorzeczenia twych wrogów.',
            'desc' => 'Twoich rzutów kością nie da się przerzucać Żetonami ciemnej strony Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Dobry: Pokutny',
            'story' => 'Piętno dawnych przewinień w końcu odmieniło Twe serce.',
            'desc' => 'Gdy będziesz musiał odrzucić tę kartę charakteru odzyskasz wszystkie punkty Życia i Żetony Losu. Niezależnie od polecenia wylosuj kartę dobrego charakteru.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Zły: Obłudny',
            'story' => 'Oszukać naiwnych jest naprawdę prosto.',
            'desc' => 'Przed odbyciem każdego spotkania z Poszukiwaczem, Nieznajomym bądź Mieszkańcem możesz określić Charakter z jakim będziesz rozpatrywał to spotkanie.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Zły: Sadystyczny',
            'story' => 'Ludzie nie doceniają radości jaką niesie wsłuchiwanie się w ludzkie cierpienie.',
            'desc' => 'Za każdym razem gdy odbierzesz innemu graczowi punkt Życia odzyskujesz Żeton ciemnej strony Losu.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Zły: Zepsuty',
            'story' => 'Każde życie ma wielką moc. A Ty potrafisz wydobyć tę moc.',
            'desc' => 'Na początku swojej tury możesz odprawić mroczny rytuał. Odrzuć wtedy wybranego przyjaciela i wylosować 1 zaklęcie o ile pozwala ci na to moc.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Zły: Haniebny',
            'story' => 'Cel uświęca środki.',
            'desc' => 'Przed wykonaniem rzutu jedną kością możesz zdecydować się odrzucić Żeton jasnej strony Losu, rzuć wtedy dwoma kośćmi i wybierz wynik.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Zły: Nieuczciwy',
            'story' => 'Zdrada nie jest Ci obca.',
            'desc' => 'Gdy wykorzystujesz Żeton ciemnej strony Losu możesz przerzucić wszystkie używane kości.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Zły: Żądny Mocy',
            'story' => 'Tylko moc, i nic więcej.',
            'desc' => 'Gdy będziesz musiał odrzucić tę kartę charakteru zyskasz 1 punkt mocy.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Zły: Szyderczy',
            'story' => 'Słabsi się nie liczą.',
            'desc' => 'Podczas dowolnej walki możesz zdecydować się zakpić sobie z wroga, rzuć wtedy dwoma kośćmi i wybierz mniejszy wynik. To będzie twoja premia do skuteczności ataku. Jeżeli wygrasz walkę odzyskasz Żeton Losu. W takiej walce nie możesz użyć Losu.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Neutralny: Tchórzliwy',
            'story' => 'Dorze jest być odważnym, ale jeszcze lepiej być żywym.',
            'desc' => 'Przed każdą walką możesz spróbować uciec. Rzuć kością, jeżeli uzyskasz 5 lub 6 uda ci się.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Neutralny: Chaotyczny',
            'story' => 'Nawet niebiosa nie wiedzą, jak Cię ocenić.',
            'desc' => 'Na początku każdej tury odzyskujesz Żeton Losu, ale nie możesz używać Żetonów jasnej strony Losu.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Neutralny: Ambitny',
            'story' => 'Zawsze chcesz zwyciężać, nigdy jednak nie posuniesz się do przeklinania swych wrogów.',
            'desc' => 'Każdy twój rzut kością możesz przerzucić drugi raz za pomocą Losu. Nie możesz jednak posiadać żetonów ciemnej strony Losu. Przewracaj wszystkię na jasną stronę.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Neutralny: Nieustępliwy',
            'story' => 'Nigdy nie pogodzisz się z porażką.',
            'desc' => 'Jeżeli przegrasz lub zremisujesz jakąkolwiek walkę, możesz odrzucić żeton jasnej strony Losu aby zignorować jej wynik i natychmiast stoczyć walkę na nowo. Musisz zaakceptować wynik drugiej walki.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Neutralny: Spostrzegawczy',
            'story' => 'Dużo można wyczytać z ludzi których codziennie mijamy.',
            'desc' => 'Możesz podglądać czary Poszukiwaczy którzy wylądują na twoim Obszarze, lub gdy ty zakończysz ruch na ich Obszarze.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Neutralny: Budzący Zwątpienie',
            'story' => 'Czym jest dobro, a czym zło?',
            'desc' => 'Każdemu napotkanemu Poszukiwaczowi możesz odwrócić wybrane Żetony Losu.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        [
            'name' => 'Neutralny: Roztropny',
            'story' => 'Pośpiech się nie sprawdza.',
            'desc' => 'Po wykonaniu rzutu za ruch możesz odjąć 1 od uzyskanego wyniku, do minimum 1.',
            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        ],
        //        [
        //            'name' => 'Dobry: Miłosierny',
        //            'story' => 'Tylko okazując łaskę naprawdę zwyciężamy.',
        //            'desc' => 'Gdy pokonasz w walce innego Poszukiwacza możesz okazać mu łaskę i zdecydować się nie odbierać mu sztuk złota, punktów Życia ani Przedmiotu. Zyskasz wtedy Żeton Losu.',
        //            'back' => './resources/backs/small/good.png'
        //        ],
        //        [
        //            'name' => 'Dobry: Ascetyczny',
        //            'story' => 'Wszelkie dobra tego świata są niczym w obliczu sił przeznaczenia.',
        //            'desc' => 'Na początku swojej tury możesz odrzucić Przedmiot aby zyskać Żeton Losu.',
        //            'back' => './resources/backs/small/good.png'
        //        ],
        //        [
        //            'name' => 'Zły: Okrutny',
        //            'story' => 'Wiesz dobrze jak ranić innych.',
        //            'desc' => 'Gdy pokonasz poszukiwacza w Walce możesz odebrać mu dwa punkty Życia zamiast jednego.',
        //            'back' => './resources/backs/small/evil.png'
        //        ],
        //        [
        //            'name' => 'Zły: Chciwy',
        //            'story' => 'Złoto to zawsze najlepsza nagroda.',
        //            'desc' => 'Gdy pokonasz w walce innego Poszukiwacza i zdecydujesz się odebrać mu Przedmiot, możesz też odebrać mu 1 sztukę złota.',
        //            'back' => './resources/backs/small/evil.png'
        //        ],
        //        [
        //            'name' => 'Neutralny: Charyzmatyczny',
        //            'story' => 'Ludzie Cię podziwiają i uwielbiają. Zupełnie nie wiadomo czemu.',
        //            'desc' => 'Gdy pokonasz w walce innego Poszukiwacza możesz zdecydować się nie odbierać mu sztuk złota, punktów Życia ani Przedmiotu, zamiast tego możesz odebrać mu wybranego Przyjaciela.',
        //            'back' => './resources/backs/small/neutral.png'
        //        ],
        //        [
        //            'name' => 'Neutralny: Żałosny',
        //            'story' => 'Niepotrafisz nawet przegrać z godnością',
        //            'desc' => 'Gdy zostaniesz pokonany przez dobrego lub neutralnego poszukiwacza, nie będzie on mógł odebrać Ci punktu życia.',
        //            'back' => './resources/backs/small/neutral.png'
        //        ],
        //        [
        //            'name' => 'Portal Spaczenia',
        //            'desc' => 'Każdy gracz który wejdzie we wrota spaczenia musi odrzucić bierzącą kartę charakteru i wylosować nową kartę złego charakteru. Każdy gracz który wyjdzie z Wrót Spaczenia musi odrzucić bierzącą kartę charakteru i wylosować nową kartę złego charakteru',
        //            'back' => './resources/backs/small/neutral.png'
        //        ],
        //        [
        //            'name' => 'Portal Prawdy',
        //            'desc' => 'Każdy zły gracz który przejdzie przez wrota musi odrzucić 1 Punkt Życia',
        //            'back' => './resources/backs/small/neutral.png'
        //        ],
        //        [
        //            'name' => 'Uszkodzony Portal',
        //            'desc' => 'Każdy gracz który przejdzie przez wrota musi odrzucić 1 Punkt Życia',
        //            'back' => './resources/backs/small/neutral.png'
        //        ],
        //        [
        //            'name' => 'Mikstura Amnezji',
        //            'desc' => 'W dowolnej chwili możesz odrzucić Miksturę Amnezji oraz swoją kartę charakteru aby wylosować nową kartę charakteru.',
        //            'back' => './resources/backs/small/neutral.png'
        //        ],
        //        [
        //            'name' => 'Mikstura Wytrwałości',
        //            'desc' => 'W dowolnej chwili możesz odrzucić Miksturę Wytrwałości aby zapobiec zmianie karty charakteru.',
        //            'back' => './resources/backs/small/neutral.png'
        //        ],
        //        [
        //            'name' => 'Pieczęć Stałości',
        //            'name' => 'Klątwa',
        //            'desc' => 'Zaklęcie to możesz żucić w dowolnym momencie na dowolnego poszukiwacza. Za każdym razem gdy ma on odrzucić kartę charakteru zamiast tego musi odrzucić punkt życia.',
        //            'back' => './resources/backs/small/neutral.png'
        //        ],
    ];
}