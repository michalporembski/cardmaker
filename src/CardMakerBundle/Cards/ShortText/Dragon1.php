<?php

namespace CardMakerBundle\Cards\ShortText;

use CardMakerBundle\Cards\AbstractCard;

class Dragon1 extends AbstractCard{
  
  protected $layerFile = 'dragon1_b';
  
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
}