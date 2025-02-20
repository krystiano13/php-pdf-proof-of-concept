<?php

namespace Krystian\PdfPhp\classes;

use mikehaertl\pdftk\Pdf;

class Generator {
    public static function generate(array $data) {
        try {
            $pdfName = "pdf_".time().".pdf";
            $pdf = new Pdf("./test.pdf");

            $pdf
                ->fillForm($data)
                ->flatten()
                ->saveAs('./files/'.$pdfName);

            return $pdfName;
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}