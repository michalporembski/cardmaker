<?php

namespace CardMakerBundle\Cards;

abstract class AbstractCard
{
    protected $textTitle;
    protected $textTag;
    protected $image;
    protected $textCaption = null;
    protected $textDescription = [];
    protected $level;


    protected $layerFile;

    protected $displayLevel = true;

    protected $textTitleSize = 28;
    protected $textLevelSize = 27;
    protected $textTagSize = 19;
    protected $textCaptionSize = 30;
    protected $textNormalSize = 21;

    protected $maxTitleWidth = 380;
    protected $maxTagWidth = 230;
    protected $maxCaptionWidth = 380;

    protected $maxWriteHeight = 670;
    protected $dummyTraiangleStart = 560;

    protected $gdPrinter;

    public function render($save = false)
    {
        $this->gdPrinter = new GdPrinter($this->layerFile, $this->image, $this->imageAreaStartX, $this->imageAreaStartY,
            $this->imageAreaWidth, $this->imageAreaHeight);

        $this->textTitleSize = $this->gdPrinter->fitTextSize($this->textTitleSize, $this->textTitle,
            $this->maxTitleWidth, 'w');
        $this->gdPrinter->centerText($this->textTitle, $this->titleHeight, $this->textTitleSize, 'w');

        $this->textTagSize = $this->gdPrinter->fitTextSize($this->textTagSize, $this->textTag, $this->maxTagWidth, 'n');
        $this->gdPrinter->centerText($this->textTag, $this->tagHeight, $this->textTagSize, 'n');
        $this->writeCardText();

        $name = $this->calculateChecksum();
        return $this->gdPrinter->render($name, $save);
    }

    public function setTextTitle($textTitle)
    {
        $this->textTitle = $textTitle;
    }

    public function setTextTag($textTag)
    {
        $this->textTag = $textTag;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setTextCaption($textCaption)
    {
        $this->textCaption = $textCaption;
    }

    public function setTextDescription($textDescription)
    {
        $this->textDescription = $textDescription;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function setTextNormalSize($textNormalSize)
    {
        $this->textNormalSize = $textNormalSize;
    }

    protected function writeCardText()
    {
        if ($this->displayLevel) {
            $this->gdPrinter->printText($this->textLevelSize, $this->cardLevelX, $this->cardLevelY, 'b', $this->level,
                true);
        }

        $writeHeight = $this->descriptionHeight;
        if ($this->textCaption) {
            $this->textCaptionSize = $this->gdPrinter->fitTextSize($this->textCaptionSize, $this->textCaption,
                $this->maxCaptionWidth, 'b');
            $writeHeight += (int)($this->textCaptionSize * 3 / 2);
            $this->gdPrinter->centerText($this->textCaption, $writeHeight, $this->textCaptionSize, 'b');
        }
        if ($this->textNormalSize) {
            $this->writeDescription($writeHeight);
        } else {
            $this->writeDescriptionAutoBreak($writeHeight);
        }
    }

    protected function writeDescription($writeHeight)
    {
        foreach ($this->textDescription as $line) {
            if ($this->dummyTraiangleStart < $writeHeight) {
                $offset = ($this->dummyTraiangleStart - $writeHeight) / 3;
            } else {
                $offset = 0;
            }
            $writeHeight += (int)($this->textNormalSize * 3 / 2);
            $this->gdPrinter->centerText($line, $writeHeight, $this->textNormalSize, 'l', $offset);

        }
    }

    protected function writeDescriptionAutoBreak($baseWriteHeight, $textNormalSize = 23)
    {
        $this->textNormalSize = 23;
        $text = implode(' ', $this->textDescription);
        $text = str_replace('   ', ' ', $text);
        $text = str_replace('  ', ' ', $text);
        $words = explode(' ', $text);
        $writeHeight = $baseWriteHeight;
        $actualLine = ' ';
        $lines = [];
        foreach ($words as $word) {
            $oldLine = $actualLine;
            $actualLine .= $word . ' ';
            $lineWidth = $this->gdPrinter->getTextWidth($textNormalSize, 'l', $actualLine);
            if ($this->dummyTraiangleStart < $writeHeight) {
                $maxWidth = 403 - $writeHeight + $this->dummyTraiangleStart;
            } else {
                $maxWidth = 403;
            }
            if ($lineWidth > $maxWidth) {
                $writeHeight += (int)($textNormalSize * 3 / 2);
                if ($writeHeight > $this->maxWriteHeight) {
                    return $this->writeDescriptionAutoBreak($baseWriteHeight, $textNormalSize - 1);
                }
                $lines[] = $oldLine;
                $actualLine = ' ' . $word . ' ';
            }
        }
        $lines[] = $actualLine;
        $writeHeight += (int)($textNormalSize * 3 / 2);
        if ($writeHeight > $this->maxWriteHeight) {
            return $this->writeDescriptionAutoBreak($baseWriteHeight, $textNormalSize - 1);
        }
        $this->textNormalSize = $textNormalSize;
        $this->textDescription = $lines;
        $this->writeDescription($baseWriteHeight);
    }

    protected function calculateChecksum()
    {
        $data = [
            'title' => $this->textTitle,
            'tag' => $this->textTag,
            'img' => $this->image,
            'cap' => $this->textCaption,
            'desc' => $this->textDescription,
            'lvl' => $this->level,
            'class' => static::class
        ];
        $log = json_encode($data);
        $hash = md5($log);
        file_put_contents('./cardlog/' . $hash, $log);
        return $hash;
    }
}
