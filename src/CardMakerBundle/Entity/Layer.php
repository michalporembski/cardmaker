<?php

namespace CardMakerBundle\Entity;

/**
 * Class Layer
 *
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

    const CARD_ALIGNMENT_GOOD = 18;

    const CARD_ALIGNMENT_EVIL = 19;

    const CARD_ALIGNMENT_NEUTRAL = 20;

    const CARD_ARTEFACT = 21;

    const CARD_KRESY = 22;

    const CARD_BLACKSMITH = 23;

    const CARD_UNHALLOWED1 = 24;

    const CARD_UNHALLOWED2 = 25;

    const CARD_GOBLINKING = 26;

    const CARD_RATKING = 27;

    const CARD_DENIZEN = 28;

    const CARD_TALISMAN = 29;

    const CARD_WOODLAND = 30;

    const CARD_TUNEL = 31;

    const CARD_POTION = 32;

    const CARD_REMNANT = 33;

    // TODO: ..
    const CARD_HERO = 255;

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
        'cardmaker.cards.tunel' => self::CARD_TUNEL,
        'cardmaker.cards.potion' => self::CARD_POTION,
        'cardmaker.cards.city' => self::CARD_CITY,
        'cardmaker.cards.harbringer' => self::CARD_HARBINGER,
        'cardmaker.cards.nether' => self::CARD_NETHER,
        'cardmaker.cards.vampire' => self::CARD_VAMPIRE,
        'cardmaker.cards.warlock' => self::CARD_WARLOCK,
        'cardmaker.cards.quest-reward' => self::CARD_QUEST_REWARD,
        'cardmaker.cards.alignment-evil' => self::CARD_ALIGNMENT_EVIL,
        'cardmaker.cards.alignment-neutral' => self::CARD_ALIGNMENT_NEUTRAL,
        'cardmaker.cards.alignment-good' => self::CARD_ALIGNMENT_GOOD,
        'cardmaker.cards.artefact' => self::CARD_ARTEFACT,
        'cardmaker.cards.kresy' => self::CARD_KRESY,
        'cardmaker.cards.blacksmith' => self::CARD_BLACKSMITH,
        'cardmaker.cards.unhallowed1' => self::CARD_UNHALLOWED1,
        'cardmaker.cards.unhallowed2' => self::CARD_UNHALLOWED2,
        'cardmaker.cards.goblinking' => self::CARD_GOBLINKING,
        'cardmaker.cards.ratking' => self::CARD_RATKING,
        'cardmaker.cards.denizen' => self::CARD_DENIZEN,
        'cardmaker.cards.talisman' => self::CARD_TALISMAN,
        'cardmaker.cards.woodland' => self::CARD_WOODLAND,
        'cardmaker.cards.remnant' => self::CARD_REMNANT,
    ];

    const CARDS_BACK = [
        self::CARD_ADVENTURES => './resources/backs/small/adventure.png',
        self::CARD_DRAGON1 => './resources/backs/small/dragon1.png',
        self::CARD_DRAGON2 => './resources/backs/small/dragon2.png',
        self::CARD_DRAGON3 => './resources/backs/small/dragon3.png',
        self::CARD_DUNGEON => './resources/backs/small/dungeon.png',
        self::CARD_EQUIPMENT => './resources/backs/small/purchase.png',
        self::CARD_HIGHLAND => './resources/backs/small/highland.png',
        self::CARD_RELICT => './resources/backs/small/relict.png',
        self::CARD_SPELL => './resources/backs/small/spell.png',
        self::CARD_TREASURE => './resources/backs/small/treasure.png',
        self::CARD_BRIDGE => './resources/backs/small/bridge.png',
        self::CARD_TUNEL => './resources/backs/small/tunel.png',
        self::CARD_CITY => './resources/backs/small/city.png',
        self::CARD_HARBINGER => './resources/backs/small/harbinger.png',
        self::CARD_NETHER => './resources/backs/small/nether.png',
        self::CARD_VAMPIRE => './resources/backs/small/vampire.png',
        self::CARD_WARLOCK => './resources/backs/small/warlockquest.png',
        self::CARD_QUEST_REWARD => './resources/backs/small/quest_reward.png',
        self::CARD_ALIGNMENT_NEUTRAL => './resources/backs/small/neutral.png',
        self::CARD_ALIGNMENT_GOOD => './resources/backs/small/good.png',
        self::CARD_ALIGNMENT_EVIL => './resources/backs/small/evil.png',
        self::CARD_ARTEFACT => './resources/backs/small/artefact.png',
        self::CARD_KRESY => './resources/backs/small/kresy.png',
        self::CARD_BLACKSMITH => './resources/backs/small/blacksmith.png',
        self::CARD_UNHALLOWED1 => './resources/backs/small/unhallowed1.png',
        self::CARD_UNHALLOWED2 => './resources/backs/small/unhallowed2.png',
        self::CARD_GOBLINKING => './resources/backs/small/goblinking.png',
        self::CARD_RATKING => './resources/backs/small/ratking.png',
        self::CARD_DENIZEN => './resources/backs/small/denizen.png',
        self::CARD_TALISMAN => './resources/backs/small/talisman.png',
        self::CARD_WOODLAND => './resources/backs/small/woodland.png',
        self::CARD_POTION => './resources/backs/small/potion.png',
        self::CARD_REMNANT => './resources/backs/small/remnant.png',
        self::CARD_HERO => './resources/backs/big/character.png',
    ];
}
