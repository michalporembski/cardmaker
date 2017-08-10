<?php
  
namespace CardMakerBundle\Cards\LongText;

use CardMakerBundle\Cards\AbstractCard;

class City extends AbstractCard{
   
  protected $layerFile = 'city_b';
  
    protected $imageAreaStartX = 20;
    protected $imageAreaStartY = 110;
    protected $imageAreaWidth = 415;
    protected $imageAreaHeight = 340;

    protected $titleHeight = 85;
    protected $tagHeight = 444;
    protected $descriptionHeight = 465;

    protected $cardLevelX = 390;
    protected $cardLevelY = 670;

    protected $maxTitleWidth = 380;
    protected $maxTagWidth = 230;
    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;
    protected $dummyTraiangleStart = 560;

    protected $displayLevel = false;
}