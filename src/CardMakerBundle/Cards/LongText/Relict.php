<?php

namespace CardMakerBundle\Cards\LongText;

use CardMakerBundle\Cards\AbstractCard;

/**
 * Class Relict
 * @package CardMakerBundle\Cards\LongText
 */
class Relict extends AbstractCard
{
    protected $layerFile = 'relict_a';

    protected $imageAreaStartX = 25;
    protected $imageAreaStartY = 110;
    protected $imageAreaWidth = 435;
    protected $imageAreaHeight = 260;

    protected $titleHeight = 85;
    protected $tagHeight = 331;
    protected $descriptionHeight = 350;

    protected $cardLevelX = 392;
    protected $cardLevelY = 670;

    protected $maxTitleWidth = 340;
    protected $maxTagWidth = 220;
    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;
    protected $dummyTraiangleStart = 530;
}
