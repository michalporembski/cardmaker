<?php

namespace CardMaker\Services;

use TCPDF;

/**
 * Class SheetPrinter
 *
 * @package CardMaker\Services
 */
class SheetPrinter
{
    const CARD_WIDTH = 39.5;

    const CARD_HEIGHT = 62.2;

    const CARD_SPACE = 3;

    const CARD_TOP = 5;

    const CARD_LEFT = 18;

    const CARD_B_WIDTH = 128;

    const CARD_B_HEIGHT = 103;

    const CARD_B_SPACE = 0;

    const CARD_B_TOP = 3;

    const CARD_B_LEFT = 15;

    private $smallCards = [];

    private $bigCards = [];

    /**
     * @param $front
     * @param $back
     */
    public function addSmallCard($front, $back)
    {
        $this->smallCards[] = ['front' => $front, 'back' => $back];
    }

    /**
     * @param $front
     * @param $back
     */
    public function addBigCard($front, $back)
    {
        $this->bigCards[] = ['front' => $front, 'back' => $back];
    }

    /**
     * prints PDF file
     */
    public function printPDF()
    {
        $pdf = $this->preparePDF();

        $sheets = array_chunk($this->smallCards,18);
        foreach($sheets as $sheet) {
            !empty($sheet) && $this->printSmallCardSheet($sheet, $pdf);
        }
        $sheets = array_chunk($this->bigCards,4);
        foreach($sheets as $sheet) {
            !empty($sheet) && $this->printBigCardSheet($sheet, $pdf);
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
        $pdf->setJPEGQuality(85);

        return $pdf;
    }

    /**
     * @param TCPDF $pdf
     */
    private function printSmallCardLines(TCPDF $pdf)
    {
        $style = [
            'width' => 0.001,
            'cap' => 'butt',
            'join' => 'miter',
            'dash' => '5,50',
            'phase' => 10,
            'color' => [100, 100, 100]
        ];
        for ($i = 0; $i < 7; $i++) {
            $pdf->Line(self::CARD_LEFT - self::CARD_SPACE / 2 + $i * (self::CARD_WIDTH + self::CARD_SPACE), 0,
                self::CARD_LEFT - self::CARD_SPACE / 2 + $i * (self::CARD_WIDTH + self::CARD_SPACE),
                200, $style);
        }
        for ($j = 0; $j < 4; $j++) {
            $pdf->Line(0, self::CARD_TOP + self::CARD_SPACE / 2 + $j * (self::CARD_HEIGHT + self::CARD_SPACE),
                300,
                self::CARD_TOP + self::CARD_SPACE / 2 + $j * (self::CARD_HEIGHT + self::CARD_SPACE), $style);
        }
    }

    /**
     * @param $files
     * @param TCPDF $pdf
     */
    private function printSmallCardSheet($files, TCPDF $pdf): void
    {
        $pdf->AddPage();
        $this->printSmallCardLines($pdf);
        $k = 0;
        for ($j = 0; $j < 3; $j++) {
            for ($i = 0; $i <= 5; $i++) {
                if (isset($files[$k])) {
                    $pdf->Image(
                        $files[$k]['front'],
                        self::CARD_LEFT + $i * (self::CARD_WIDTH + self::CARD_SPACE),
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
        }
        $pdf->AddPage();
        $k = 0;
        for ($j = 0; $j < 3; $j++) {
            for ($i = 5; $i >= 0; $i--) {
                if (isset($files[$k])) {
                    $pdf->Image(
                        $files[$k]['back'],
                        self::CARD_LEFT + $i * (self::CARD_WIDTH + self::CARD_SPACE),
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
        }
    }

    /**
     * @param $files
     * @param TCPDF $pdf
     */
    public function printBigCardSheet($files, TCPDF $pdf)
    {

        $pdf->AddPage();
        $k = 0;
        for ($j = 0; $j < 2; $j++) {
            for ($i = 0; $i < 2; $i++) {
                if (isset($files[$k])) {
                    $pdf->Image(
                        $files[$k]['front'],
                        self::CARD_B_LEFT + $i * (self::CARD_B_WIDTH + self::CARD_B_SPACE),
                        self::CARD_B_TOP + self::CARD_B_SPACE + $j * (self::CARD_B_HEIGHT + self::CARD_B_SPACE),
                        self::CARD_B_WIDTH,
                        self::CARD_B_HEIGHT,
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
        }
        $pdf->AddPage();
        $k = 0;
        for ($j = 0; $j < 2; $j++) {
            for ($i = 1; $i >= 0; $i--) {
                if (isset($files[$k])) {
                    $pdf->Image(
                        $files[$k]['back'],
                        self::CARD_B_LEFT + $i * (self::CARD_B_WIDTH + self::CARD_B_SPACE),
                        self::CARD_B_TOP + self::CARD_B_SPACE + $j * (self::CARD_B_HEIGHT + self::CARD_B_SPACE),
                        self::CARD_B_WIDTH,
                        self::CARD_B_HEIGHT,
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
        }
    }
}