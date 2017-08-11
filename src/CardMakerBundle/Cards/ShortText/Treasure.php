<?php

namespace CardMakerBundle\Cards\ShortText;

use CardMakerBundle\Cards\AbstractCard;

/**
 * Class Treasure
 * @package CardMakerBundle\Cards\ShortText
 */
class Treasure extends AbstractCard
{
    protected $layerFile = 'treasure_b';

    protected $imageAreaStartX = 25;
    protected $imageAreaStartY = 110;
    protected $imageAreaWidth = 410;
    protected $imageAreaHeight = 349;

    protected $titleHeight = 85;
    protected $tagHeight = 447;
    protected $descriptionHeight = 460;

    protected $cardLevelX = 390;
    protected $cardLevelY = 673;

    protected $maxTitleWidth = 370;
    protected $maxTagWidth = 210;
    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;
    protected $dummyTriangleStart = 560;
}
