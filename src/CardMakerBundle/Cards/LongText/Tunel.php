<?php

namespace CardMakerBundle\Cards\LongText;

use CardMakerBundle\Cards\AbstractCard;

/**
 * Class Tunel
 *
 * @package CardMakerBundle\Cards\LongText
 */
class Tunel extends AbstractCard
{
    protected $layerFile = 'tunel_a';

    protected $imageAreaStartX = 20;

    protected $imageAreaStartY = 110;

    protected $imageAreaWidth = 415;

    protected $imageAreaHeight = 340;

    protected $titleHeight = 85;

    protected $tagHeight = 444;

    protected $descriptionHeight = 465;

    protected $cardLevelX = 390;

    protected $cardLevelY = 670;

    protected $maxTitleWidth = 380;

    protected $maxTagWidth = 230;

    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;

    protected $dummyTriangleStart = 560;

    protected $displayLevel = true;
}
