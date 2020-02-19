<?
class View{
    static public function render($path, $data=[]){

        $menuItems = self::getMenu();
        
        extract($data);
        unset($data);
        require 'views/header.php';
        require 'views/'.$path.'.php';
        require 'views/footer.php';
    }

    static public function getMenu(){
        $menu = [];
        if( file_exists('config/menu.php') ){
            $menu = require_once 'config/menu.php';
        }
        return $menu;
    }
}