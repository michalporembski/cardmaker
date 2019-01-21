<?php

namespace CardMakerBundle\Cards\ShortText;

use CardMakerBundle\Cards\AbstractCard;

class Woodland extends AbstractCard
{
    protected $layerFile = 'woodland_b';

    protected $imageAreaStartX = 25;

    protected $imageAreaStartY = 100;

    protected $imageAreaWidth = 415;

    protected $imageAreaHeight = 350;

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
}