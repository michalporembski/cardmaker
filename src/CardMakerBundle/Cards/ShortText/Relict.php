<?php

namespace CardMakerBundle\Cards\ShortText;

use CardMakerBundle\Cards\AbstractCard;

/**
 * Class Relict
 * @package CardMakerBundle\Cards\ShortText
 */
class Relict extends AbstractCard
{
    protected $layerFile = 'relict_b';

    protected $imageAreaStartX = 25;
    protected $imageAreaStartY = 110;
    protected $imageAreaWidth = 435;
    protected $imageAreaHeight = 365;

    protected $titleHeight = 85;
    protected $tagHeight = 447;
    protected $descriptionHeight = 460;

    protected $cardLevelX = 392;
    protected $cardLevelY = 670;

    protected $maxTitleWidth = 340;
    protected $maxTagWidth = 220;
    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;
    protected $dummyTraiangleStart = 530;
}
