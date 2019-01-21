<?php

namespace CardMakerBundle\Cards\LongText;

use CardMakerBundle\Cards\AbstractCard;

/**
 * Class Equpiment
 *
 * @package CardMakerBundle\Cards\LongText
 */
class Equpiment extends AbstractCard
{
    protected $layerFile = 'equipment_a';

    protected $imageAreaStartX = 25;

    protected $imageAreaStartY = 110;

    protected $imageAreaWidth = 410;

    protected $imageAreaHeight = 240;

    protected $titleHeight = 87;

    protected $tagHeight = 331;

    protected $descriptionHeight = 350;

    protected $cardLevelX = 387;

    protected $cardLevelY = 671;

    protected $maxTitleWidth = 380;

    protected $maxTagWidth = 230;

    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;

    protected $dummyTriangleStart = 560;
}
