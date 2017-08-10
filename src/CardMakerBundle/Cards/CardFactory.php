<?php

namespace CardMakerBundle\Cards;

use CardMakerBundle\Cards\LongText\Adventures as AdventuresLong;
use CardMakerBundle\Cards\LongText\Bridge as BridgeLong;
use CardMakerBundle\Cards\LongText\City as CityLong;
use CardMakerBundle\Cards\LongText\Dragon1 as Dragon1Long;
use CardMakerBundle\Cards\LongText\Dragon2 as Dragon2Long;
use CardMakerBundle\Cards\LongText\Dragon3 as Dragon3Long;
use CardMakerBundle\Cards\LongText\Dungeon as DungeonLong;
use CardMakerBundle\Cards\LongText\Equpiment as EqupimentLong;
use CardMakerBundle\Cards\LongText\Harbinger as HarbingerLong;
use CardMakerBundle\Cards\LongText\Highland as HighlandLong;
use CardMakerBundle\Cards\LongText\Nether as NetherLong;
use CardMakerBundle\Cards\LongText\Relict as RelictLong;
use CardMakerBundle\Cards\LongText\Spell as SpellLong;
use CardMakerBundle\Cards\LongText\Treasure as TreasureLong;
use CardMakerBundle\Cards\LongText\Vampire as VampireLong;
use CardMakerBundle\Cards\ShortText\Adventures as AdventuresShort;
use CardMakerBundle\Cards\ShortText\Bridge as BridgeShort;
use CardMakerBundle\Cards\ShortText\City as CityShort;
use CardMakerBundle\Cards\ShortText\Dragon1 as Dragon1Short;
use CardMakerBundle\Cards\ShortText\Dragon2 as Dragon2Short;
use CardMakerBundle\Cards\ShortText\Dragon3 as Dragon3Short;
use CardMakerBundle\Cards\ShortText\Dungeon as DungeonShort;
use CardMakerBundle\Cards\ShortText\Equpiment as EqupimentShort;
use CardMakerBundle\Cards\ShortText\Harbinger as HarbingerShort;
use CardMakerBundle\Cards\ShortText\Highland as HighlandShort;
use CardMakerBundle\Cards\ShortText\Nether as NetherShort;
use CardMakerBundle\Cards\ShortText\Relict as RelictShort;
use CardMakerBundle\Cards\ShortText\Spell as SpellShort;
use CardMakerBundle\Cards\ShortText\Treasure as TreasureShort;
use CardMakerBundle\Cards\ShortText\Vampire as VampireShort;

/**
 * Class CardFactory
 * @package CardMakerBundle\Cards
 *
 * @TODO: remove this class
 */
class CardFactory
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
    const CARD_HARBRINGER = 13;
    const CARD_NETHER = 14;
    const CARD_VAMPIRE = 15;

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
        'cardmaker.cards.harbringer' => self::CARD_HARBRINGER,
        'cardmaker.cards.nether' => self::CARD_NETHER,
        'cardmaker.cards.vampire' => self::CARD_VAMPIRE,
    ];

    public function getCard(
        $layer,
        $title,
        $tag,
        $text,
        $level,
        $image,
        $LongText = true,
        $caption = '',
        $fontsize = 21,
        $save = true
    ) {
        $classes = $this->getClasses($LongText);

        if (isset($classes[$layer])) {
            $class = $classes[$layer];
        } else {
            $class = reset($classes);
        }

        $card = new $class();
        $card->setTextNormalSize($fontsize);
        $card->setLevel($level);
        $card->setTextTitle($title);
        $card->setTextTag($tag);
        $card->setTextCaption($caption);
        $card->setTextDescription(explode(PHP_EOL, $text));
        $card->setImage($image);

        return $card->render($save);
    }

    protected function getClasses($LongText)
    {
        if ($LongText) {
            return [
                self::CARD_ADVENTURES => AdventuresLong::class,
                self::CARD_DRAGON1 => Dragon1Long::class,
                self::CARD_DRAGON2 => Dragon2Long::class,
                self::CARD_DRAGON3 => Dragon3Long::class,
                self::CARD_DUNGEON => DungeonLong::class,
                self::CARD_EQUIPMENT => EqupimentLong::class,
                self::CARD_HIGHLAND => HighlandLong::class,
                self::CARD_RELICT => RelictLong::class,
                self::CARD_SPELL => SpellLong::class,
                self::CARD_TREASURE => TreasureLong::class,

                self::CARD_BRIDGE => BridgeLong::class,
                self::CARD_CITY => CityLong::class,
                self::CARD_HARBRINGER => HarbingerLong::class,
                self::CARD_NETHER => NetherLong::class,
                self::CARD_VAMPIRE => VampireLong::class
            ];
        }
        return [
            self::CARD_ADVENTURES => AdventuresShort::class,
            self::CARD_DRAGON1 => Dragon1Short::class,
            self::CARD_DRAGON2 => Dragon2Short::class,
            self::CARD_DRAGON3 => Dragon3Short::class,
            self::CARD_DUNGEON => DungeonShort::class,
            self::CARD_EQUIPMENT => EqupimentShort::class,
            self::CARD_HIGHLAND => HighlandShort::class,
            self::CARD_RELICT => RelictShort::class,
            self::CARD_SPELL => SpellShort::class,
            self::CARD_TREASURE => TreasureShort::class,

            self::CARD_BRIDGE => BridgeShort::class,
            self::CARD_CITY => CityShort::class,
            self::CARD_HARBRINGER => HarbingerShort::class,
            self::CARD_NETHER => NetherShort::class,
            self::CARD_VAMPIRE => VampireShort::class
        ];
    }
}
