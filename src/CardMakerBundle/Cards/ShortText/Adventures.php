<?php
  
namespace CardMakerBundle\Cards\ShortText;

use CardMakerBundle\Cards\AbstractCard;

class Adventures extends AbstractCard{
   
  protected $layerFile = 'adventures_b';
  
  protected $imageAreaStartX = 30;
  protected $imageAreaStartY = 110;
  protected $imageAreaWidth = 405;
  protected $imageAreaHeight = 350;
  
  protected $titleHeight = 85;
  protected $tagHeight = 447;
  protected $descriptionHeight = 470;
  
  protected $cardLevelX = 388;
  protected $cardLevelY = 670;
}