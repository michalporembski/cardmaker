<?php

namespace CardMakerBundle\Entity;

/**
 * Class Layer
 * @package CardMakerBundle\Entity
 */
class Layer
{
    const CARD_ADVENTURES = 1;
    const CARD_DRAGON1 = 2;
    const CARD_DRAGON2 = 3;
    const CARD_DRAGON3 = 4;
    const CARD_DUNGEON = 5;
    const CARD_EQUIPMENT = 6;
    const CARD_HIGHLAND = 7;
    const CARD_RELICT = 8;
    const CARD_SPELL = 9;
    const CARD_TREASURE = 10;
    const CARD_BRIDGE = 11;
    const CARD_CITY = 12;
    const CARD_HARBINGER = 13;
    const CARD_NETHER = 14;
    const CARD_VAMPIRE = 15;
    const CARD_WARLOCK = 16;
    const CARD_QUEST_REWARD = 17;

    const CARD_LAYERS = [
        'cardmaker.cards.adventure' => self::CARD_ADVENTURES,
        'cardmaker.cards.dragon1' => self::CARD_DRAGON1,
        'cardmaker.cards.dragon2' => self::CARD_DRAGON2,
        'cardmaker.cards.dragon3' => self::CARD_DRAGON3,
        'cardmaker.cards.dungeon' => self::CARD_DUNGEON,
        'cardmaker.cards.equipment' => self::CARD_EQUIPMENT,
        'cardmaker.cards.highland' => self::CARD_HIGHLAND,
        'cardmaker.cards.relict' => self::CARD_RELICT,
        'cardmaker.cards.spell' => self::CARD_SPELL,
        'cardmaker.cards.treasure' => self::CARD_TREASURE,
        'cardmaker.cards.bridge' => self::CARD_BRIDGE,
        'cardmaker.cards.city' => self::CARD_CITY,
        'cardmaker.cards.harbringer' => self::CARD_HARBINGER,
        'cardmaker.cards.nether' => self::CARD_NETHER,
        'cardmaker.cards.vampire' => self::CARD_VAMPIRE,
        'cardmaker.cards.warlock' => self::CARD_WARLOCK,
        'cardmaker.cards.quest-reward' => self::CARD_QUEST_REWARD,
    ];
}
