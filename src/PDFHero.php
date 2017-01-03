<?php
namespace EvandoJunior;

class PDFHero {

    public function __construct(){
        echo "HEI, I'M PDFHero!";
    }

     // $ouput_file = 'browser', 'download', 'file'
    public static function show($path_file,  $filename = "filename.pdf", $output_type = "browser"){

        $data = file_get_contents("{$path_file}");
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        echo $data;
    }

    public static function merge($files, $output_file, $filename = "filename.pdf", $ouput_type= "browser"){
        shell_exec('gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -dNOPAUSE  -dBATCH -sOutputFile='.$output_file.' '.implode(" ", $files));
        self::show($output_file, $filename, $ouput_type);
    }
}
