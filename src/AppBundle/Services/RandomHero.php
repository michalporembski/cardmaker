<?php

namespace AppBundle\Services;

use AppBundle\Entity\Hero;

/*
 * Na początku swojej tury,
 * Kiedy masz wykonać rzut kością za ruch,
 * Kiedy znajdziesz się na obszarze [Puszczy/Cmentarza/Kapliczki/Wioski..],
 * Za każdym razem, kiedy zabijesz Wroga,
 * Za każdym razem, kiedy [wygrasz/przegrasz] [walkę/walkę psychiczną/jaką kolwiek walkę],
 * Za każdym razem, kiedy się modlisz,
 * Za każdym razem, kiedy otrzymujesz [punkt Siły/punkt Mocy/punkt Siły lub Mocy/Zaklęcie]
 * Za każdym razem, kiedy wyrzucisz [1,6] za ruch,
 * Za każdym razem, kiedy wykonasz zadanie Czarownika, zamiast otrzymać Talizman,
 * Za każdym razem, kiedy wykonasz zadanie Czarownika,
 * Za każdym razem, kiedy tracisz [punkt Życia/Sztukę Złota/punkt Losu],
 * Za każdym razem, kiedy inny gracz [rzuca Zaklęcie/odrzuca Zaklęcie/otrzymuje Zaklęcie/otrzymuje punkt Losu..],
 * Za każdym razem, kiedy odbierasz innemu Poszukiwaczowi [punkt Życia/Przedmiot],
 * Za każdym razem, kiedy pokonasz innego Poszukiwacza,
 * Za każdym razem, kiedy pokonasz innego Poszukiwacza, zamiast otrzymać zwyklą nagrodę możesz
 * Za każdym razem, masz losować kartę przygody,
 * Za każdym razem, kiedy wylosujesz kartę przygody,
 * Za każdym razem, kiedy losując kartę przygody wyciągniesz [Przyjaciela/Wroga/Zdarzenie/Nieznajomego/Miejsce/Przedmiot]
 * -możesz [-/odrzucić [punkt Losu/punkt Życia/Trofeum/Przyjaciela/Przedmiot] aby]
 * --otrzymać
 * ---1 Zaklęcie, jeśli pozwala ci na to twoja Moc.
 * ---tyle Zaklęć, na ile pozwala ci twoja Moc.
 * ---1 punkt Losu.
 * ---1 punkt Życia.
 * ---1 Sztukę złota
 * --odzyskać
 * ---1 punkt Losu
 * ---1 punkt Życia
 * --wylosować dodatkową kartę przygody.
 * --zignorować wyciągniętą kartę i wylosować nową.
 * --otrzymać losową kartę z tali [ekwipunku/Stajni/Skarbów/eliksirów/chowańców/..]
 * --natychmiast odbyć kolejny ruch
 * --przenieść się na [obszar zajmowany przez innego Poszukiwacza/Puszczy/Cmentarza/..]
 * --odebrać Poszukiwaczowi [Przyjaciela/Zaklęcie/punkt Losu]
 * --odebrać Poszukiwaczowi dodatkowy [Przedmiot/punkt Życia/Sztukę złota]
 *
 */
/**
 * Class Generator
 *
 * @package AppBundle
 */
class RandomHero
{
    const SKILLS = [
        'Base Spells' => [
            [
                'text' => 'Rozpoczynasz grę, posiadając jedno Zaklęcie.',
                'cost' => 10,
                'requirements' =>
                    [
                        'craft' => 3
                    ],
            ],
            [
                'text' => 'Rozpoczynasz grę, posiadając dwa Zaklęcia.',
                'cost' => 20,
                'requirements' =>
                    [
                        'craft' => 4
                    ],
            ],
            [
                'text' => 'Rozpoczynasz grę, posiadając trzy Zaklęcia.',
                'cost' => 30,
                'requirements' =>
                    [
                        'craft' => 6
                    ],
            ],
        ],
        'Add spels' => [
            [
                'text' => 'Jeśli na początku swojej tury nie posiadasz ani jednego Zaklęcia, możesz wylosować 1 Zaklęcie.',
                'cost' => 15,
                'requirements' =>
                    [
                        'craft' => 3
                    ],
            ],
            [
                'text' => 'Zawsze musisz posiadać przynajmniej jedno Zaklęcia (za każdym razem, kiedy wykorzystasz swoje ostatnie Zaklęcie, losujesz nowe.',
                'cost' => 20,
                'requirements' =>
                    [
                        'craft' => 3
                    ],
            ],
            [
                'text' => 'Zawsze musisz posiadać przynajmniej dwa Zaklęcia (za każdym razem, kiedy wykorzystasz swoje przedostatnie Zaklęcie, losujesz nowe.',
                'cost' => 50,
                'requirements' =>
                    [
                        'craft' => 4
                    ],
            ],
            [
                'text' => 'Na początku swojej tury możesz otrzymać 1 Zaklęcie, jeśli pozwala ci na to twoja Moc.',
                'cost' => 55,
                'requirements' =>
                    [
                        'craft' => 3
                    ],
            ],
            [
                'text' => 'Na początku swojej tury możesz otrzymać tyle zaklęć, na ile pozwala ci twoja Moc.',
                'cost' => 70,
                'requirements' =>
                    [
                        'craft' => 4
                    ],
            ],
            [
                'text' => 'Kiedy znajdziesz się na obszarze Puszczy, możesz dobrać tyle Zaklęć, na ile pozwala ci wartość twojej Mocy.',
                'cost' => 70,
                'requirements' =>
                    [
                        'craft' => 3
                    ],
            ],
            [
                'text' => 'Kiedy znajdziesz się na obszarze Cmentarza, możesz otrzymać 1 Zaklęcie, jeśli pozwala ci na to twoja Moc.',
                'cost' => 70,
                'requirements' =>
                    [
                        'craft' => 3
                    ],
            ],
            [
                'text' => 'Kiedy inny gracz odkłada Zaklęcie na stos kart odrzuconych, możesz (o ile pozwala ci na to twoja Moc) wziąć to Zaklęcie dla siebie.',
                'cost' => 30,
                'requirements' =>
                    [
                        'craft' => 3
                    ],
            ],
        ],
    ];

    public function generateHero()
    {
        $strength = rand(1, 7);
        $craft = rand(1, 7);
        $life = rand(2, 6);
        $fate = rand(1, 6);
        $characterKey = array_rand(Hero::CHARACTERS);
        $hero = new Hero(
            'Losowy Bohater',
            'Miasto',
            Hero::CHARACTERS[$characterKey],
            $strength,
            $craft,
            $life,
            $fate
        );
    }
}
