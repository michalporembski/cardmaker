<?php

namespace CardMakerBundle\Entity\Dto;

use CardMakerBundle\Handler\CardGenerate;

/**
 * Class CardMakerBundle
 *
 * @package Cardmaker\Entity\Dto
 */
class GenerateCard
{
    /**
     * @var int|null
     */
    private $layer;

    /**
     * @var int|null
     */
    private $mode;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $tag;

    /**
     * @var int
     */
    private $captionType = CardGenerate::CAPTION_TYPE_NONE;

    /**
     * @var string|null
     */
    private $caption;

    /**
     * @var string|null
     */
    private $level;

    /**
     * @var string|null
     */
    private $text;

    /**
     * @var string|null
     */
    private $story;

    /**
     * @var string[]
     */
    private $places = [];

    /**
     * @var string|null
     */
    private $image;

    //    /**
    //     * @var string|null
    //     */
    //    private $imageUrl;

    /**
     * @var int|null
     */
    private $textSize;

    /**
     * Template type: auto/short text/long text
     *
     * @var int|null
     */
    private $layoutSize;

    /**
     * @var bool
     */
    private $save = false;

    /**
     * @return int|null
     */
    public function getLayer()
    {
        return $this->layer;
    }

    /**
     * @param int|null $layer
     */
    public function setLayer($layer)
    {
        $this->layer = $layer;
    }

    /**
     * @return int|null
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param int|null $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return null|string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param null|string $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return int
     */
    public function getCaptionType(): int
    {
        return $this->captionType;
    }

    /**
     * @param int $captionType
     */
    public function setCaptionType(int $captionType)
    {
        $this->captionType = $captionType;
    }

    /**
     * @return null|string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param null|string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return null|string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param null|string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param null|string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return null|string
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * @param null|string $story
     */
    public function setStory($story)
    {
        $this->story = $story;
    }

    /**
     * @return int|null
     */
    public function getLayoutSize()
    {
        return $this->layoutSize;
    }

    /**
     * @param int|null $layoutSize
     */
    public function setLayoutSize($layoutSize)
    {
        $this->layoutSize = $layoutSize;
    }

    /**
     * @return int|null
     */
    public function getTextSize()
    {
        return $this->textSize;
    }

    /**
     * @param int|null $textSize
     */
    public function setTextSize($textSize)
    {
        $this->textSize = $textSize;
    }

    /**
     * @return null|string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param null|string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    //    /**
    //     * @return null|string
    //     */
    //    public function getImageUrl()
    //    {
    //        return $this->imageUrl;
    //    }
    //
    //    /**
    //     * @param null|string $imageUrl
    //     */
    //    public function setImageUrl($imageUrl)
    //    {
    //        $this->imageUrl = $imageUrl;
    //    }

    /**
     * @return bool
     */
    public function isSave(): bool
    {
        return $this->save;
    }

    /**
     * @param bool $save
     */
    public function setSave(bool $save)
    {
        $this->save = $save;
    }

    /**
     * @param string[] $places
     */
    public function setPlaces(array $places)
    {
        $this->places = $places;
    }

    /**
     * @return string[]
     */
    public function getPlaces(): array
    {
        return $this->places;
    }

    public function getCardData(): array
    {
        return [
            $this->layer,
            $this->mode,
            $this->title,
            $this->tag,
            $this->captionType,
            $this->caption,
            $this->level,
            $this->text,
            $this->story,
            $this->places,
            $this->image,
            //     $this->imageUrl,
            $this->textSize,
            $this->layoutSize
        ];
    }
}
