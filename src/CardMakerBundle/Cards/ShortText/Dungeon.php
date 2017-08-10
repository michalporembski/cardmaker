<?php

namespace CardMakerBundle\Cards\ShortText;

use CardMakerBundle\Cards\AbstractCard;

/**
 * Class Dungeon
 * @package CardMakerBundle\Cards\ShortText
 */
class Dungeon extends AbstractCard
{
    protected $layerFile = 'dungeon_b';

    protected $imageAreaStartX = 25;
    protected $imageAreaStartY = 110;
    protected $imageAreaWidth = 410;
    protected $imageAreaHeight = 350;

    protected $titleHeight = 85;
    protected $tagHeight = 447;
    protected $descriptionHeight = 460;

    protected $cardLevelX = 387;
    protected $cardLevelY = 670;

    protected $maxTitleWidth = 340;
    protected $maxTagWidth = 230;
    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;
    protected $dummyTraiangleStart = 560;
}
