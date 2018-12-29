<?php

namespace CardMakerBundle\Handler;

use CardMakerBundle\Cards\AbstractCard;
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
use CardMakerBundle\Cards\LongText\Potion as PotionLong;
use CardMakerBundle\Cards\LongText\Relict as RelictLong;
use CardMakerBundle\Cards\LongText\Remnant as RemnantLong;
use CardMakerBundle\Cards\LongText\Spell as SpellLong;
use CardMakerBundle\Cards\LongText\Talisman as TalismanLong;
use CardMakerBundle\Cards\LongText\Treasure as TreasureLong;
use CardMakerBundle\Cards\LongText\Tunel as TunelLong;
use CardMakerBundle\Cards\LongText\Vampire as VampireLong;
use CardMakerBundle\Cards\LongText\Woodland as WoodlandLong;
use CardMakerBundle\Cards\NoImage\Denizen;
use CardMakerBundle\Cards\NoImage\Evil;
use CardMakerBundle\Cards\NoImage\Good;
use CardMakerBundle\Cards\NoImage\Neutral;
use CardMakerBundle\Cards\NoImage\QuestReward;
use CardMakerBundle\Cards\NoImage\Warlock;
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
use CardMakerBundle\Cards\ShortText\Potion as PotionShort;
use CardMakerBundle\Cards\ShortText\Relict as RelictShort;
use CardMakerBundle\Cards\ShortText\Remnant as RemnantShort;
use CardMakerBundle\Cards\ShortText\Spell as SpellShort;
use CardMakerBundle\Cards\ShortText\Talisman as TalismanShort;
use CardMakerBundle\Cards\ShortText\Treasure as TreasureShort;
use CardMakerBundle\Cards\ShortText\Tunel as TunelShort;
use CardMakerBundle\Cards\ShortText\Vampire as VampireShort;
use CardMakerBundle\Cards\ShortText\Woodland as WoodlandShort;
use CardMakerBundle\Entity\Dto\GenerateCard;
use CardMakerBundle\Entity\Layer;

/**
 * Class CardGenerate
 *
 * @package Cardmaker\Handler
 */
class CardGenerate
{
    const CARD_LAYOUT_SIZE = [
        'cardmaker.layout-size.auto' => 0,
        'cardmaker.layout-size.small-text' => 1,
        'cardmaker.layout-size.big-text' => 2
    ];

    const CAPTION_TYPE_NONE = 0;

    const CAPTION_TYPE_ITALIC = 1;

    const CAPTION_TYPE_REGULAR = 2;

    const CAPTION_TYPES = [
        'cardmaker.caption.none' => self::CAPTION_TYPE_NONE,
        'cardmaker.caption.italic' => self::CAPTION_TYPE_ITALIC,
        'cardmaker.caption.regular' => self::CAPTION_TYPE_REGULAR,
    ];

    /**
     * @param GenerateCard $generateCardCommand
     *
     * @return null|string
     */
    public function handle(GenerateCard $generateCardCommand)
    {
        $path = $this->getCardPath($this->buildCardHash($generateCardCommand));
        if (file_exists($path)) {
            return $path;
        }
        $layoutSize = $this->getLayoutSize($generateCardCommand);
        $card = $this->getCardObject($generateCardCommand->getLayer(), $layoutSize);

        $card->setTextNormalSize($generateCardCommand->getTextSize());
        $card->setLevel($generateCardCommand->getLevel());
        $card->setTextTitle($generateCardCommand->getTitle());
        $card->setTextTag($generateCardCommand->getTag());
        $card->setTextCaption($generateCardCommand->getCaption());
        $card->setCaptionType($generateCardCommand->getCaptionType());
        if (!empty($generateCardCommand->getPlaces())) {
            $card->setTextCaption(implode($generateCardCommand->getPlaces(), ' • '));
            $card->setCaptionType(AbstractCard::CAPTION_TYPE_UNDERLINE);
        }
        // TODO: explode text by lines only if auto-line-break disabled
        $card->setTextDescription(explode(PHP_EOL, $generateCardCommand->getText()));
        $card->setStory(explode(PHP_EOL, $generateCardCommand->getStory()));
        if (!$generateCardCommand->getImage()) {
            //TODO: temporary upload; use previously uploaded file
            $card->setImage('./uploads/1.jpg');
        } else {
            $card->setImage($generateCardCommand->getImage());
        }

        return $card->render($path);
    }

    /**
     * @param GenerateCard $generateCardCommand
     *
     * @return string|null
     */
    protected function buildCardHash(GenerateCard $generateCardCommand)
    {
        // TODO: we should support package generation, that would place cards of each deck in separate folder
        if (!$generateCardCommand->isSave()) {
            return null;
        }
        $name = $generateCardCommand->getLayer() .
            '_' . substr($generateCardCommand->getTitle(), 0, 20) .
            '_' . substr(base_convert(md5(json_encode($generateCardCommand->getCardData())),16,36), 0, 5);

        return $name;
    }

    /**
     * @param string|null $name
     *
     * @return string|null
     */
    protected function getCardPath($name)
    {
        if (!$name) {
            return null;
        }

        return './generated/' . $name . '.png';
    }

    /**
     * @param GenerateCard $generateCardCommand
     *
     * @return int
     */
    protected function getLayoutSize(GenerateCard $generateCardCommand): int
    {
        $layoutSize = $generateCardCommand->getLayoutSize();
        if ($layoutSize) {
            return $layoutSize;
        }

        $len = strlen($generateCardCommand->getText());
        if ($generateCardCommand->getCaption()) {
            $len += 20;
        }
        if (strpos($generateCardCommand->getText(), AbstractCard::LINE_TEXT) > 0) {
            $len += 100;
        }
        $len += strlen($generateCardCommand->getStory());

        if ($len > 230) {
            return self::CARD_LAYOUT_SIZE['cardmaker.layout-size.big-text'];
        }

        return self::CARD_LAYOUT_SIZE['cardmaker.layout-size.small-text'];
    }

    /**
     * @param int $layer
     * @param int $layoutSize
     *
     * @return AbstractCard
     */
    protected function getCardObject(int $layer, int $layoutSize): AbstractCard
    {
        $classes = $this->getClasses($layoutSize);
        $class = $classes[$layer] ?? reset($classes);

        return new $class();
    }

    /**
     * @param int $layoutSize
     *
     * @return array
     */
    protected function getClasses(int $layoutSize): array
    {
        if (self::CARD_LAYOUT_SIZE['cardmaker.layout-size.big-text'] === $layoutSize) {
            return [
                Layer::CARD_ADVENTURES => AdventuresLong::class,
                Layer::CARD_TALISMAN => TalismanLong::class,
                Layer::CARD_DRAGON1 => Dragon1Long::class,
                Layer::CARD_DRAGON2 => Dragon2Long::class,
                Layer::CARD_DRAGON3 => Dragon3Long::class,
                Layer::CARD_DUNGEON => DungeonLong::class,
                Layer::CARD_EQUIPMENT => EqupimentLong::class,
                Layer::CARD_HIGHLAND => HighlandLong::class,
                Layer::CARD_RELICT => RelictLong::class,
                Layer::CARD_SPELL => SpellLong::class,
                Layer::CARD_TREASURE => TreasureLong::class,

                Layer::CARD_BRIDGE => BridgeLong::class,
                Layer::CARD_CITY => CityLong::class,
                Layer::CARD_HARBINGER => HarbingerLong::class,
                Layer::CARD_NETHER => NetherLong::class,
                Layer::CARD_VAMPIRE => VampireLong::class,
                Layer::CARD_WOODLAND => WoodlandLong::class,
                Layer::CARD_TUNEL => TunelLong::class,
                Layer::CARD_POTION => PotionLong::class,
                Layer::CARD_REMNANT => RemnantLong::class,

                Layer::CARD_WARLOCK => Warlock::class,
                Layer::CARD_DENIZEN => Denizen::class,
                Layer::CARD_QUEST_REWARD => QuestReward::class,
                Layer::CARD_ALIGNMENT_EVIL => Evil::class,
                Layer::CARD_ALIGNMENT_GOOD => Good::class,
                Layer::CARD_ALIGNMENT_NEUTRAL => Neutral::class,
            ];
        }

        return [
            Layer::CARD_ADVENTURES => AdventuresShort::class,
            Layer::CARD_TALISMAN => TalismanShort::class,
            Layer::CARD_DRAGON1 => Dragon1Short::class,
            Layer::CARD_DRAGON2 => Dragon2Short::class,
            Layer::CARD_DRAGON3 => Dragon3Short::class,
            Layer::CARD_DUNGEON => DungeonShort::class,
            Layer::CARD_EQUIPMENT => EqupimentShort::class,
            Layer::CARD_HIGHLAND => HighlandShort::class,
            Layer::CARD_RELICT => RelictShort::class,
            Layer::CARD_SPELL => SpellShort::class,
            Layer::CARD_TREASURE => TreasureShort::class,

            Layer::CARD_BRIDGE => BridgeShort::class,
            Layer::CARD_CITY => CityShort::class,
            Layer::CARD_HARBINGER => HarbingerShort::class,
            Layer::CARD_NETHER => NetherShort::class,
            Layer::CARD_VAMPIRE => VampireShort::class,
            Layer::CARD_WOODLAND => WoodlandShort::class,
            Layer::CARD_TUNEL => TunelShort::class,
            Layer::CARD_POTION => PotionShort::class,
            Layer::CARD_REMNANT => RemnantShort::class,

            Layer::CARD_WARLOCK => Warlock::class,
            Layer::CARD_QUEST_REWARD => QuestReward::class,
            Layer::CARD_DENIZEN => Denizen::class,
            Layer::CARD_ALIGNMENT_EVIL => Evil::class,
            Layer::CARD_ALIGNMENT_GOOD => Good::class,
            Layer::CARD_ALIGNMENT_NEUTRAL => Neutral::class,
        ];
    }
}
