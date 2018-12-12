<?php

namespace CardMakerBundle\Cards;

/**
 * Class AbstractCard
 *
 * @package CardMakerBundle\Cards
 */
abstract class AbstractCard
{
    const CAPTION_TYPE_BOLD = 2;

    const CAPTION_TYPE_BOLD_ITALIC = 1;

    const CAPTION_TYPE_UNDERLINE = 3;

    protected $textTitle;

    protected $textTag;

    protected $image;

    protected $textCaption = null;

    protected $textDescription = [];

    protected $story = [];

    protected $level;

    protected $layerFile;

    protected $displayLevel = true;

    protected $displayImage = true;

    protected $textTitleSize = 28;

    protected $textLevelSize = 27;

    protected $textTagSize = 19;

    protected $textCaptionSize = 30;

    protected $textNormalSize = 21;

    protected $maxTitleWidth = 380;

    protected $maxTagWidth = 230;

    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;

    protected $dummyTriangleStart = 560;

    protected $captionType = 0;

    protected $imageAreaStartX;

    protected $imageAreaStartY;

    protected $imageAreaWidth;

    protected $imageAreaHeight;

    /**
     * @var GdPrinter
     */
    protected $gdPrinter;

    /**
     * @param null $name
     *
     * @return null|string
     */
    public function render($name = null)
    {
        if ($this->displayImage) {
            $this->gdPrinter = new GdPrinter(
                $this->layerFile,
                $this->image,
                $this->imageAreaStartX,
                $this->imageAreaStartY,
                $this->imageAreaWidth,
                $this->imageAreaHeight
            );
        } else {
            $this->gdPrinter = new GdPrinter(
                $this->layerFile
            );
        }
        $this->textTitleSize = $this->gdPrinter->fitTextSize($this->textTitleSize, $this->textTitle,
            $this->maxTitleWidth, 'w');
        $this->gdPrinter->centerText($this->textTitle, $this->titleHeight, $this->textTitleSize, 'w');

        $this->textTagSize = $this->gdPrinter->fitTextSize($this->textTagSize, $this->textTag, $this->maxTagWidth, 'n');
        $this->gdPrinter->centerText($this->textTag, $this->tagHeight, $this->textTagSize, 'n');
        $this->writeCardText();

        return $this->gdPrinter->render($name);
    }

    /**
     * @param $textTitle
     */
    public function setTextTitle($textTitle)
    {
        $this->textTitle = $textTitle;
    }

    /**
     * @param $textTag
     */
    public function setTextTag($textTag)
    {
        $this->textTag = $textTag;
    }

    /**
     * @param $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @param $textCaption
     */
    public function setTextCaption($textCaption)
    {
        $this->textCaption = $textCaption;
    }

    /**
     * @param int $captionType
     */
    public function setCaptionType(int $captionType)
    {
        $this->captionType = $captionType;
    }

    /**
     * @param $textDescription
     */
    public function setTextDescription($textDescription)
    {
        $this->textDescription = $textDescription;
    }

    /**
     * @param $story
     */
    public function setStory($story)
    {
        $this->story = $story;
    }

    /**
     * @param $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @param $textNormalSize
     */
    public function setTextNormalSize($textNormalSize)
    {
        $this->textNormalSize = $textNormalSize;
    }

    /**
     * writeCardText()
     */
    protected function writeCardText()
    {
        if ($this->displayLevel) {
            $this->gdPrinter->printText(
                $this->textLevelSize,
                $this->cardLevelX,
                $this->cardLevelY,
                'b',
                $this->level,
                true);
        }

        $writeHeight = $this->descriptionHeight;
        if ($this->captionType && $this->textCaption) {
            if ($this->captionType == self::CAPTION_TYPE_BOLD) {
                $captionFont = 'b';
            } elseif ($this->captionType == self::CAPTION_TYPE_BOLD_ITALIC) {
                $captionFont = 'bi';
            } else {
                $captionFont = 'n';
            }
            $this->textCaptionSize = $this->gdPrinter->fitTextSize($this->textCaptionSize, $this->textCaption,
                $this->maxCaptionWidth, $captionFont);
            $writeHeight += (int)($this->textCaptionSize * 1.5);
            $this->gdPrinter->centerText($this->textCaption, $writeHeight, $this->textCaptionSize, $captionFont);
            $writeHeight -= (int)($this->textCaptionSize * 1.4);
        } else {
            // ???
            $writeHeight -= 50;
        }

        if (!$this->textNormalSize) {
            $this->estimateFontSize();
        }

        $descriptionHeight = $this->estimateStoryAutoBreak($writeHeight) + $this->textNormalSize;
        $this->estimateDescriptionAutoBreak($descriptionHeight);

        $this->writeStory($writeHeight);
        $this->writeDescription($descriptionHeight);
    }

    /**
     * @param $writeHeight
     */
    protected function writeDescription($writeHeight)
    {
        foreach ($this->textDescription as $line) {
            if ($this->dummyTriangleStart < $writeHeight) {
                $offset = ($this->dummyTriangleStart - $writeHeight) / 3;
            } else {
                $offset = 0;
            }
            $writeHeight += (int)($this->textNormalSize * 3 / 2);
            $this->gdPrinter->centerText($line, $writeHeight, $this->textNormalSize, 'l', $offset);
        }
    }

    /**
     * @param $writeHeight
     */
    protected function writeStory($writeHeight)
    {
        foreach ($this->story as $line) {
            if ($this->dummyTriangleStart < $writeHeight) {
                $offset = ($this->dummyTriangleStart - $writeHeight) / 3;
            } else {
                $offset = 0;
            }
            $writeHeight += (int)($this->textNormalSize * 3 / 2);
            $this->gdPrinter->centerText($line, $writeHeight, $this->textNormalSize, 'li', $offset);
        }
    }

    /**
     * @param $baseWriteHeight
     *
     * @return bool
     */
    protected function estimateDescriptionAutoBreak($baseWriteHeight): bool
    {
        $allLines = [];

        $writeHeight = $baseWriteHeight;
        foreach ($this->textDescription as $line) {
            $lineBreakData = $this->breakLine($line, $writeHeight, $this->textNormalSize);
            if ($lineBreakData === false) {
                $this->textNormalSize = $this->textNormalSize - 1;

                return $this->estimateDescriptionAutoBreak($baseWriteHeight);
            }
            $newLines = $lineBreakData[0];
            $writeHeight = $lineBreakData[1];
            $allLines = array_merge(
                $allLines,
                $newLines
            );
        }
        $this->textDescription = $allLines;

        return true;
    }

    /**
     * @param $baseWriteHeight
     *
     * @return int
     */
    protected function estimateStoryAutoBreak($baseWriteHeight): int
    {
        $allLines = [];

        $writeHeight = $baseWriteHeight;
        foreach ($this->story as $line) {
            $res = $this->breakLine($line, $writeHeight, $this->textNormalSize);
            if ($res === false) {
                $this->textNormalSize = $this->textNormalSize - 1;

                return $this->estimateStoryAutoBreak($baseWriteHeight);
            }
            $newLines = $res[0];
            $writeHeight = $res[1];
            $allLines = array_merge(
                $allLines,
                $newLines
            );
        }
        $this->story = $allLines;

        return $writeHeight;
    }

    /**
     * estimateFontSize()
     */
    protected function estimateFontSize()
    {
        // TODO: do some research, improve this..
        $text = implode(' ', $this->textDescription);
        $text = str_replace('   ', ' ', $text);
        $text = str_replace('  ', ' ', $text);
        $textAmount = strlen($text) + count($this->textDescription) * 10;
        $textNormalSize = 24 - ($textAmount / 100);
        $this->textNormalSize = $textNormalSize;
    }

    /**
     * @param $line
     * @param $baseWriteHeight
     * @param $textNormalSize
     *
     * @return array|bool
     */
    protected function breakLine($line, $baseWriteHeight, $textNormalSize)
    {
        $words = explode(' ', $line);
        $writeHeight = $baseWriteHeight;
        $actualLine = ' ';
        $lines = [];
        foreach ($words as $word) {
            $oldLine = $actualLine;
            $actualLine .= $word . ' ';
            $lineWidth = $this->gdPrinter->getTextWidth($textNormalSize, 'l', $actualLine);
            if ($this->dummyTriangleStart < $writeHeight) {
                $maxWidth = 403 - $writeHeight + $this->dummyTriangleStart;
            } else {
                $maxWidth = 403;
            }
            if ($lineWidth > $maxWidth) {
                $writeHeight += (int)($textNormalSize * 3 / 2);
                if ($writeHeight > $this->maxWriteHeight) {
                    return false;
                }
                $lines[] = $oldLine;
                $actualLine = ' ' . $word . ' ';
            }
        }
        $lines[] = $actualLine;
        $writeHeight += (int)($textNormalSize * 3 / 2);
        if ($writeHeight > $this->maxWriteHeight) {
            return false;
        }

        return [$lines, $writeHeight];
    }
}
