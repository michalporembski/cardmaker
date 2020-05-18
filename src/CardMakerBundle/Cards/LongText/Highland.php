<?php

namespace CardMaker\Cards\LongText;

use CardMaker\Cards\AbstractCard;

/**
 * Class Highland
 *
 * @package CardMaker\Cards\LongText
 */
class Highland extends AbstractCard
{
    protected $layerFile = 'highland_a';

    protected $imageAreaStartX = 25;

    protected $imageAreaStartY = 110;

    protected $imageAreaWidth = 410;

    protected $imageAreaHeight = 230;

    protected $titleHeight = 89;

    protected $tagHeight = 331;

    protected $descriptionHeight = 355;

    protected $cardLevelX = 391;

    protected $cardLevelY = 671;

    protected $maxTitleWidth = 380;

    protected $maxTagWidth = 230;

    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;

    protected $dummyTriangleStart = 560;
}
