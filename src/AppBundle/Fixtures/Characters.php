<?php

namespace AppBundle\Fixtures;

use CardMakerBundle\Entity\Layer;

class Characters
{
    const BIG_CARDS = [
        [
            'front' => './charaktery/druid.png',
            'back' => Layer::CARD_HERO,
        ],
    ];

    const CARDS = [
        [
            'name' => 'Szlachetny',
            'story' => 'Twoje szlachetne serce potrafi stawić opór przeznaczeniu i je odmienić.',
            'desc' => 'Za każdym razem gdy miałbyś utracić Przyjaciela, zamiast tego możesz odrzucić punkt Życia.',
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
            'desc' => 'Za każdym razem gdy stracisz punkt Życia odzyskujesz punkt Losu.',
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
            'name' => 'Odpowiedzialny',
            'story' => 'Dbasz o swoich towarzyszy.',
            'desc' => 'Możesz ujawnić swój Charakter w momencie, gdy miałbyś stracić Przyjaciela. Zapobiegniesz utracie Przyjaciela i zyskujesz punkt Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Miłosierny',
            'story' => 'Tylko okazując łaskę naprawdę zwyciężamy.',
            'desc' => 'Gdy pokonasz w jakiejkolwiek walce innego Poszukiwacza, możesz zrezygnować z nagrody. Zyskasz wtedy punkt Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Ascetyczny',
            'story' => 'Wszelkie dobra tego świata są niczym w obliczu sił przeznaczenia.',
            'desc' => 'Na początku swojej tury, możesz odrzucić Przedmiot, aby zyskać punkt Losu.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Pełen wigoru',
            'story' => 'Jest w Tobie dużo sił witalnych!',
            'desc' => 'Zawsze gdy wymieniasz trofea na punkty Siły, możesz odzyskać 1 punkt Życia.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        [
            'name' => 'Błogosławiony',
            'story' => 'Niebiosa nas prowadzą.',
            'desc' => 'Przed wykonaniem rzutu jedną kością, możesz zdecydować się odrzucić punkt jasnej strony Losu. Rzuć wtedy dwoma kośćmi i wybierz wynik, który ci się podoba.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        //        [
        //            'name' => 'Heroiczny',
        //            'story' => '',
        //            'desc' => '',
        //            'card' => Layer::CARD_ALIGNMENT_GOOD,
        //        ],
        //        [
        //            'name' => 'Cierpliwy',
        //            'story' => '',
        //            'desc' => '',
        //            'card' => Layer::CARD_ALIGNMENT_GOOD,
        //        ],
        //        [
        //            'name' => 'Bezinteresowny',
        //            'story' => '',
        //            'desc' => '',
        //            'card' => Layer::CARD_ALIGNMENT_GOOD,
        //        ],
        //        [
        //            'name' => 'Odpowiedzialny',
        //            'story' => '',
        //            'desc' => '',
        //            'card' => Layer::CARD_ALIGNMENT_GOOD,
        //        ],
        [
            'name' => 'Waleczny',
            'story' => 'Stawisz czoła każdemu przyciwnikowi.',
            'desc' => 'Za każdym razem, kiedy wdajesz się w walkę z Wrogiem lub Poszukiwaczem, którego Siła jest wyższa niż twoja Siła, możesz dodac 1 do skuteczności swojego ataku.',
            'card' => Layer::CARD_ALIGNMENT_GOOD,
        ],
        //        [
        //            'name' => 'Wierny',
        //            'story' => '',
        //            'desc' => '',
        //            'card' => Layer::CARD_ALIGNMENT_GOOD,
        //        ],
        //        [
        //            'name' => 'Ufny',
        //            'story' => '',
        //            'desc' => '',
        //            'card' => Layer::CARD_ALIGNMENT_GOOD,
        //        ],
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
            'desc' => 'Przed odbyciem każdego spotkania z Poszukiwaczem, Nieznajomym bądź Mieszkańcem, możesz określić Charakter z jakim będziesz rozpatrywał to spotkanie.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Sadystyczny',
            'story' => 'Ludzie nie doceniają radości jaką niesie wsłuchiwanie się w ludzkie cierpienie.',
            'desc' => 'Za każdym razem gdy odbierzesz innemu Poszukiwaczowi punkt Życia odzyskujesz punkt ciemnej strony Losu.',
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
            'desc' => 'Gdy inny Poszukiwacz będzie miał wykonać rzut jedną kością, możesz zdecydować się odrzucić punkt ciemnej strony Losu, musi on wtedy rzuć dwoma kośćmi i wybrać niższy wynik.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Nieuczciwy',
            'story' => 'Zdrada nie jest Ci obca.',
            'desc' => 'Gdy wykorzystujesz punkt ciemnej strony Losu, możesz przerzucić dowolną ilość kości.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Żądny Mocy',
            'story' => 'Tylko moc, i nic więcej.',
            'desc' => 'Ujawniając kartę Charakteru, musisz odrzucić 2 punkty Życia, aby otrzymać punkt Mocy.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Żądny Magii',
            'story' => 'Dla niej możesz przekląć samego siebie.',
            'desc' => 'Ujawniając kartę Charakteru, limit posiadanych przez Ciebie Zaklęć zostanie zwiększony o 1, musisz jednak odrzucić 2 punkty Losu.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        [
            'name' => 'Szyderczy',
            'story' => 'Słabsi się nie liczą.',
            'desc' => 'Podczas jakiejkolwiek walki, możesz zdecydować się zakpić sobie z wroga, rzuć wtedy dwoma kośćmi i wybierz mniejszy wynik. To będzie twoja premia do skuteczności ataku. Jeżeli wygrasz walkę odzyskasz punkt ciemnej strony Losu. W takiej walce nie możesz użyć Losu.',
            'card' => Layer::CARD_ALIGNMENT_EVIL,
        ],
        //        [
        //            'name' => 'Fanatyczny',
        //            'story' => 'Zniszczyć wszystkie bestie!',
        //            'desc' => 'Zamiast rzucać kością za ruch, możesz przesunąć się na dowolny, najbliższy inny obszar w twojej Krainie, na którym znajduje się Wróg.',
        //            'card' => Layer::CARD_ALIGNMENT_EVIL,
        //        ],
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
            'desc' => 'Przed każdą walką, możesz spróbować uciec. Rzuć kością, jeżeli uzyskasz 5 lub 6 uda ci się.',
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
            'desc' => 'Każdy twój rzut kością, możesz przerzucić drugi raz za pomocą Losu. Nie, możesz jednak posiadać punktów ciemnej strony Losu. Przewracaj wszystkię na jasną stronę.',
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
            'desc' => 'Gdy zostaniesz pokonany w jakiej kolwiek walce przez Dobrego lub Neutralnego Poszukiwacza, będzie on musiał zmienić Charakter na Zły.',
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
        //        //        [
        //        //            'name' => 'Uparty',
        //        //            'story' => '',
        //        //            'desc' => '',
        //        //            'card' => Layer::CARD_ALIGNMENT_NEUTRAL,
        //        //        ],
        //        [
        //            'name' => 'Lustro Spaczenia',
        //            'tag' => 'Miejsce',
        //            'desc' => 'Na twojej drodze pojawiło się Lustro Spaczenia, jeżeli zdecydujesz się przez nie przejść, będziesz mógł natychmiast wykonać dodatkową turę, będziesz jednak musiał zmienić Charakter na Zły. Kiedy ktoś skożysta z Lustra Spaczenia to rozpadnie się i trafi na stos kart odrzuconych.',
        //            'card' => Layer::CARD_DUNGEON,
        //            'level' => 6
        //        ],
        //        [
        //            'name' => 'Mikstura Amnezji',
        //            'caption' => 'Drobiazg',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'W dowolnej chwili, możesz odrzucić Miksturę Amnezji oraz swoją kartę Charakteru, aby wylosować nową kartę Charakteru.',
        //            'card' => Layer::CARD_BLACKSMITH,
        //            'level' => 6
        //        ],
        //        [
        //            'name' => 'Talizman Trwałości',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'Nie możesz zmienić charakteru wbrew swojej woli',
        //            'card' => Layer::CARD_TALISMAN,
        //            'level' => 6
        //        ],
        //        [
        //            'name' => 'Księga Charakterów',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'Połóż na tej karcie 3 kart charakteru, w dowolnym momencie możesz odrzucić swoją kartę charakteru i wziąść jedną kartę z księgi charakteru, od tej pory to będzie twój Charakter',
        //            'card' => Layer::CARD_RELICT,
        //            'level' => 6
        //        ],
        //        [
        //            'name' => 'Złodziej Duszy',
        //            'caption' => 'Broń',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'Podczas walki złodziej duszy dodaje 2 punkty do twojej Siły. Jeżeli pokonasz Poszukiwacza możesz mu odebrać  kartę Charakteru i zmusić go do wylosowania nowej.',
        //            'card' => Layer::CARD_TREASURE,
        //            'level' => 6
        //        ],
        //        [
        //            'name' => 'Kostur Druida',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'Podczas walki złodziej duszy dodaje 1 punkt do twojej Siły. Jeżeli pokonasz Poszukiwacza możesz mu odebrać  kartę Charakteru i zmusić go do wylosowania nowej.',
        //            'card' => Layer::CARD_WOODLAND,
        //            'level' => 6
        //        ],
        //        [
        //            'name' => 'Mikstura Wytrwałości',
        //            'caption' => 'Drobiazg',
        //            'tag' => 'Magiczny Przedmiot',
        //            'desc' => 'W dowolnej chwili możesz odrzucić Miksturę Wytrwałości aby zapobiec zmianie Charakteru.',
        //            'card' => Layer::CARD_EQUIPMENT,
        //            'level' => 6
        //        ],
        //        [
        //            'name' => 'Pieczęć Stałości',
        //            'caption' => 'Klątwa',
        //            'tag' => 'Zaklęcie',
        //            'desc' => 'Zaklęcie to możesz żucić w dowolnym momencie na dowolnego poszukiwacza. Za każdym razem gdy ma on odrzucić kartę charakteru zamiast tego musi odrzucić punkt życia.',
        //            'card' => Layer::CARD_SPELL,
        //            'level' => 6
        //        ],
    ];
}

/* druid:
Rozpoczynasz grę posiadając jedno Zaklęcie.

W dowolnym momencie możesz odrzucić
punkt Losu aby zmienić swój Charakter.

Kiedy znajdziesz się na obszarze Puszczy,
możesz dobrać tyle Zaklęć, na ile pozwala
ci wartość twojej Mocy.


1. Przygotowanie:
Przed rozpoczęciem rozgrywki, po wylosowaniu postaci każdy gracz dobiera 2 karty charakteru odpowiadające charakterowi jego postaci. Musi wybrać z pośród nich jedną, drugą zaś odrzucić. Wylosowaną kartę zachować rewersem do góry. Gracz nie ujawnia zdolności wynikającej z jego charakteru.

2. Ujawnienie Charakteru:
W momencie gdy gracz będzie chciał skorzystać z umiejętności wynikającej z karty charakteru musi odwrócić tę kartę ujawniając ją. Od tej pory wszyscy gracze znają jego charakter. Należy pamiętać o tym że niektóre karty charakteru dają jednorazowy efekt, oraz o tym że niektóre karty charakteru nakładają ograniczenie na gracza. Ograniczenia działać będą dopiero po ujawnieniu karty charakteru.

Objaśnienie:
Dodatek ma ułatwiać grę słabszym graczą.

Karty charakteru mają stanowić pewnego rodzaju asy z rękawa. Gracz nie powinien nie roztropnie ich ujawniać, gracze którzy zbyt długo nie ujawniają swojej karty charakteru powinni wzbudzać podejrzenia.

Ponad to z gry trzeba usunąć wszystkie karty które dawałby możliwość niekontrolowanej zmiany charakteru, np postać Druida lub Kostur Druida.


*/
