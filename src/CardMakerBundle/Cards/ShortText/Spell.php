<?php

namespace CardMakerBundle\Cards\ShortText;

use CardMakerBundle\Cards\AbstractCard;

/**
 * Class Spell
 * @package CardMakerBundle\Cards\ShortText
 */
class Spell extends AbstractCard
{
    protected $layerFile = 'spell_b';

    protected $imageAreaStartX = 25;
    protected $imageAreaStartY = 110;
    protected $imageAreaWidth = 405;
    protected $imageAreaHeight = 355;

    protected $titleHeight = 85;
    protected $tagHeight = 447;
    protected $descriptionHeight = 460;

    protected $displayLevel = false;
    protected $cardLevelX = 390;
    protected $cardLevelY = 670;

    protected $maxTitleWidth = 370;
    protected $maxTagWidth = 210;
    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;
    protected $dummyTriangleStart = 560;
}
