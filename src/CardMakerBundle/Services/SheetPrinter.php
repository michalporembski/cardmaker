<?php

namespace CardMakerBundle\Services;

use TCPDF;

/**
 * Class SheetPrinter
 *
 * @package CardMakerBundle\Services
 */
class SheetPrinter
{
    const CARD_WIDTH = 39.5;

    const CARD_HEIGHT = 62.2;

    const CARD_SPACE = 2.2;

    const CARD_TOP = 5;

    private $files = [];

    /**
     * @param $front
     * @param $back
     */
    public function addFile($front, $back)
    {
        $this->files[] = ['front' => $front, 'back' => $back];
    }

    /**
     * prints PDF file
     */
    public function printPDF()
    {
        $pdf = $this->preparePDF();
        $this->printLines($pdf);

        $files = $this->files;
        shuffle($files);
        $k = 0;
        for ($i = 0; $i < 7; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $pdf->Image(
                    $files[$k]['front'],
                    self::CARD_SPACE + $i * (self::CARD_WIDTH + self::CARD_SPACE),
                    self::CARD_TOP + self::CARD_SPACE + $j * (self::CARD_HEIGHT + self::CARD_SPACE),
                    self::CARD_WIDTH,
                    self::CARD_HEIGHT,
                    'PNG',
                    '',
                    '',
                    true,
                    300,
                    '',
                    false,
                    false,
                    0,
                    false,
                    false,
                    false
                );
                $k++;
            }
        }
        $pdf->AddPage();
        $k = 0;
        for ($i = 0; $i < 7; $i++) {
            for ($j = 2; $j >= 0; $j--) {
                $pdf->Image(
                    $files[$k]['back'],
                    self::CARD_SPACE + $i * (self::CARD_WIDTH + self::CARD_SPACE),
                    self::CARD_TOP + self::CARD_SPACE + $j * (self::CARD_HEIGHT + self::CARD_SPACE),
                    self::CARD_WIDTH,
                    self::CARD_HEIGHT,
                    'PNG',
                    '',
                    '',
                    true,
                    300,
                    '',
                    false,
                    false,
                    0,
                    false,
                    false,
                    false
                );
                $k++;
            }
        }
        $pdf->Output('card_sheet.pdf', 'I');
    }

    /**
     * @return TCPDF
     */
    private function preparePDF(): TCPDF
    {
        $pdf = new TCPDF(
            'L',
            PDF_UNIT,
            PDF_PAGE_FORMAT,
            true,
            'UTF-8',
            false
        );
        $pdf->SetMargins(0, 0, 0);
        $pdf->SetHeaderMargin(0);
        $pdf->SetFooterMargin(0);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(false, PDF_MARGIN_BOTTOM);
        $pdf->AddPage();
        $pdf->setJPEGQuality(75);

        return $pdf;
    }

    /**
     * @param TCPDF $pdf
     */
    private function printLines(TCPDF $pdf)
    {
        $style = [
            'width' => 0.001,
            'cap' => 'butt',
            'join' => 'miter',
            'dash' => '5,50',
            'phase' => 10,
            'color' => [100, 100, 100]
        ];
        for ($i = 0; $i < 8; $i++) {
            $pdf->Line(self::CARD_SPACE / 2 + $i * (self::CARD_WIDTH + self::CARD_SPACE), 0,
                self::CARD_SPACE / 2 + $i * (self::CARD_WIDTH + self::CARD_SPACE),
                200, $style);
        }
        for ($j = 0; $j < 4; $j++) {
            $pdf->Line(0, self::CARD_TOP + self::CARD_SPACE / 2 + $j * (self::CARD_HEIGHT + self::CARD_SPACE),
                300,
                self::CARD_TOP + self::CARD_SPACE / 2 + $j * (self::CARD_HEIGHT + self::CARD_SPACE), $style);
        }
    }
}