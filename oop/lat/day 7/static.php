<?php
// class Wob {
//     public static $title = "My Page<br>";
// }

// echo Wob::$title;
// class web
// {
//     public static $title = "my page";

//     public function changeTitle()
//     {
//         self::$title = "my page2";
//         return self::$title;
//     }

//     public function changeTitle2()
//     {
//         return self::$title;
//     }
// }

// class yourWeb extends web
// {
//     public function changeTitle()
//     {
//         self::$title = "your page";
//         return self::$title;
//     }
// }

// echo web::$title . "<br>";
// $myweb = new web();
// echo $myweb->changeTitle() . "<br>" . $myweb->changeTitle2();
// echo "<br>";
// $yourweb = new yourWeb();
// echo $yourweb->changeTitle() . "<br>" . $myweb->changeTitle2();

class Web {
    public static $title = "First Page";

    public static function getTitlePage(){
        return"Nama Halaman ini adalah '" . self::$title ."'";}
}
echo Web::$title;
echo "<br>";
echo Web::getTitlePage();