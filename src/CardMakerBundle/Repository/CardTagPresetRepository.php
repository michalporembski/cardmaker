<?php

namespace CardMaker\Repository;

use CardMaker\Entity\CardTagPreset;
use CardMaker\Entity\Layer;

/**
 * Class CardTagPresetRepository
 *
 * @package CardMaker\Repository
 */
class CardTagPresetRepository
{
    const CARD_TAG_ENEMY_ANIMAL = 1;

    const CARD_TAG_ENEMY_CULTIST = 2;

    const CARD_TAG_ENEMY_CONSTRUCT = 3;

    const CARD_TAG_ENEMY_DEAMON = 4;

    const CARD_TAG_ENEMY_DRAGON = 5;

    const CARD_TAG_ENEMY_ELEMENTAL = 6;

    const CARD_TAG_ENEMY_FAE = 7;

    const CARD_TAG_ENEMY_LAW = 8;

    const CARD_TAG_ENEMY_MONSTER = 9;

    const CARD_TAG_ENEMY_NORM = 10;

    const CARD_TAG_ENEMY_OUTLAW = 11;

    const CARD_TAG_ENEMY_SPIRIT = 12;

    const CARD_TAG_ENEMY_UNDEAD = 13;

    const CARD_TAG_EVENT = 14;

    const CARD_TAG_ITEM = 15;

    const CARD_TAG_FOLLOWER = 16;

    const CARD_TAG_MAGIC_ITEM = 17;

    const CARD_TAG_MOON_EVENT = 18;

    const CARD_TAG_PLACE = 19;

    const CARD_TAG_SPELL = 20;

    const CARD_TAG_STRANGER = 21;

    const CARD_TAG_PRESETS = [
        [
            'name' => 'Zdarzenie',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Księżycowe Zdarzenie',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Przyjaciel',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE,
                Layer::CARD_EQUIPMENT,
                Layer::CARD_RELICT,
            ]
        ],
        [
            'name' =>
                'Przedmiot',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE,
                Layer::CARD_EQUIPMENT,
                Layer::CARD_RELICT,
                Layer::CARD_TREASURE,
            ]
        ],
        [
            'name' =>
                'Magiczny Przedmiot',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE,
                Layer::CARD_EQUIPMENT,
                Layer::CARD_RELICT,
                Layer::CARD_TREASURE,
            ]
        ],
        [
            'name' =>
                'Wróg - Duch',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Wróg - Demon',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Wróg - Kultysta',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Wróg - Konstrukt',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Wróg - Potwór',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Wróg - Smok',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Wróg - Zwierzę',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Wróg - Żywiołak',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Miejsce',
            'layers' => [
                Layer::CARD_ADVENTURES,
                Layer::CARD_BRIDGE,
                Layer::CARD_CITY,
                Layer::CARD_DRAGON1,
                Layer::CARD_DRAGON2,
                Layer::CARD_DRAGON2,
                Layer::CARD_DUNGEON,
                Layer::CARD_HARBINGER,
                Layer::CARD_HIGHLAND,
                Layer::CARD_NETHER,
                Layer::CARD_VAMPIRE
            ]
        ],
        [
            'name' =>
                'Zaklęcie',
            'layers' => [
                Layer::CARD_SPELL
            ],
        ]
    ];

    /**
     * @return array
     */
    public function getAll(): array
    {
        $result = [];
        foreach (self::CARD_TAG_PRESETS as $tag => $layers) {
            $cardTagPreset = new CardTagPreset();
            $cardTagPreset->init($tag, $layers);
            $result[] = $cardTagPreset;
        }

        return $result;
    }

    /**
     * @param int $layer
     *
     * @return array
     */
    public function getByLayer(int $layer): array
    {
        $result = [];
        foreach (self::CARD_TAG_PRESETS as $tag => $layers) {
            if (in_array($layer, $layers)) {
                $cardTagPreset = new CardTagPreset($tag, $layers);
                $result[] = $cardTagPreset;
            }
        }

        return $result;
    }
}
