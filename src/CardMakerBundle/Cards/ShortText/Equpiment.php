<?php

namespace CardMaker\Cards\ShortText;

use CardMaker\Cards\AbstractCard;

/**
 * Class Equpiment
 * @package CardMaker\Cards\ShortText
 */
class Equpiment extends AbstractCard
{
    protected $layerFile = 'equipment_b';

    protected $imageAreaStartX = 25;
    protected $imageAreaStartY = 110;
    protected $imageAreaWidth = 410;
    protected $imageAreaHeight = 350;

    protected $titleHeight = 85;
    protected $tagHeight = 447;
    protected $descriptionHeight = 460;

    protected $cardLevelX = 387;
    protected $cardLevelY = 671;

    protected $maxTitleWidth = 380;
    protected $maxTagWidth = 230;
    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;
    protected $dummyTriangleStart = 560;
}
