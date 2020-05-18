<?php

namespace CardMaker\Cards;

class Info extends AbstractCard
{
    protected $layerFile = '../other_layers/info';

    protected $cardWidth = 1500;

    protected $cardHeight = 1200;

    protected $imageAreaStartX = 20;

    protected $imageAreaStartY = 110;

    protected $imageAreaWidth = 415;

    protected $imageAreaHeight = 340;

    protected $titleHeight = 200;

    protected $tagHeight = 444;

    protected $descriptionHeight = 115;

    protected $cardLevelX = 390;

    protected $cardLevelY = 670;

    protected $maxTitleWidth = 370;

    protected $maxTagWidth = 230;

    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 1000;

    protected $dummyTriangleStart = 9999;

    protected $displayLevel = false;

    protected $displayImage = false;

    protected $textTitleSize = 28;

    protected $textLevelSize = 27;

    protected $textTagSize = 19;

    protected $textCaptionSize = 30;

    protected $maxWidth = 1200;

    protected $textNormalSize = 10;

    /**
     * estimateFontSize()
     */
    protected function estimateFontSize()
    {
        $this->textNormalSize = 18;
    }
}