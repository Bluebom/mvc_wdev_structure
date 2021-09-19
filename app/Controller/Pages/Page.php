<?php
    namespace app\Controller\Pages;

    use \App\Utils\View;

    class Page{

        private static function getHeader(){
            return View::render('pages/templates/header');
        }

        private static function getFooter(){
            return View::render('pages/templates/footer');
        }

        public static function getPage($title, $content){
            return View::render('pages/page', [
                "header"=> self::getHeader(),
                "title"=> $title,
                "content" => $content,
                "footer"=> self::getFooter()
            ]);
        }
    }
?>