<?php
  
namespace CardMakerBundle\Cards\LongText;

use CardMakerBundle\Cards\AbstractCard;

class Adventures extends AbstractCard{
   
  protected $layerFile = 'adventures_a';
  
  protected $imageAreaStartX = 30;
  protected $imageAreaStartY = 110;
  protected $imageAreaWidth = 405;
  protected $imageAreaHeight = 235;
  
  protected $titleHeight = 85;
  protected $tagHeight = 330;
  protected $descriptionHeight = 355;
  
  protected $cardLevelX = 388;
  protected $cardLevelY = 670;
}