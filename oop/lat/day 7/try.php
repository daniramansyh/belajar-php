<?php
// class Web {
//     protected static $title = "First Page";

//     public static function getTitlePage(){
//         echo "Nama Halaman ini adalah '". self::$title."'";
//     }
// }

// class otherweb extends Web{
//     public function __construct() {
//         Web::getTitlePage();
//     }

//     public function getTitle(){
//         return Web::$title;
//     }
// }

// $otherweb = New otherweb;
// echo "<br>";
// echo $otherweb->getTitle();

class Web {
    private static $title = "First Page";
    protected static function getTitlePage(){
        echo"Nama Halaman ini adalah '". self::$title ."'";
    }
}

class otherweb extends Web{
    public function __construct(){
        web::getTitlePage();
    }
}
new otherweb;