<?php

namespace CardMaker\Cards\LongText;

use CardMaker\Cards\AbstractCard;

/**
 * Class Spell
 * @package CardMaker\Cards\LongText
 */
class Spell extends AbstractCard
{
    protected $layerFile = 'spell_a';

    protected $imageAreaStartX = 25;
    protected $imageAreaStartY = 110;
    protected $imageAreaWidth = 405;
    protected $imageAreaHeight = 240;

    protected $titleHeight = 87;
    protected $tagHeight = 331;
    protected $descriptionHeight = 350;

    protected $displayLevel = false;
    protected $cardLevelX = 390;
    protected $cardLevelY = 670;

    protected $maxTitleWidth = 370;
    protected $maxTagWidth = 210;
    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;
    protected $dummyTriangleStart = 560;
}
