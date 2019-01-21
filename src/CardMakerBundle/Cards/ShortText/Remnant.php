<?php

namespace CardMakerBundle\Cards\ShortText;

use CardMakerBundle\Cards\AbstractCard;

/**
 * Class Bridge
 *
 * @package CardMakerBundle\Cards\ShortText
 */
class Remnant extends AbstractCard
{
    protected $layerFile = 'remnant_b';

    protected $imageAreaStartX = 25;

    protected $imageAreaStartY = 110;

    protected $imageAreaWidth = 410;

    protected $imageAreaHeight = 345;

    protected $titleHeight = 89;

    protected $tagHeight = 447;

    protected $descriptionHeight = 460;

    protected $cardLevelX = 391;

    protected $cardLevelY = 671;

    protected $maxTitleWidth = 380;

    protected $maxTagWidth = 230;

    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;

    protected $dummyTriangleStart = 560;
}
