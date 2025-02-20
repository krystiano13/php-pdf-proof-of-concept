<?php

namespace Krystian\PdfPhp\classes;

use mikehaertl\pdftk\Pdf;

class Generator {
    public static function generate(array $data) {
        try {
            $pdfName = "pdf_".time().".pdf";
            $pdf = new Pdf("./test.pdf");

            $pdf
                ->fillForm($data) // Podajemy tablicę asocjacyjną, w której key i value wyglądają następująco: 'pole_w_pdf' => "wartość"
                ->flatten() // to usuwa nam możliwość edycji pliku po wygenerowaniu
                ->saveAs('./files/'.$pdfName);

            return $pdfName;
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}