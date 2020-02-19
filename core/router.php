<?
class Router
{
    private static $count = 0;
    private function __consctruct(){}
    private function __clone(){}
    public static function start(){
        if(self::$count == 0){
            $url = isset($_GET['url']) ? $_GET['url'] : 'main';
            $url = explode('/', $url);
            $fileContorller = 'controllers/'.$url[0].'Controller.php';
            if( file_exists($fileContorller) ){
                require_once $fileContorller;
                $nameController = $url[0].'Controller';
                $controller = new $nameController();
                $nameMethod = isset($url[1]) ? $url[1] : 'index';
                $param = isset($url[2]) ? $url[2] : null;
                if( method_exists($controller, $nameMethod) ){
                    $controller->$nameMethod($param);
                }
                else{
                    Router::errorPage404();
                }
            }
            else{
                Router::errorPage404();
            } 
            self::$count = 1;
        }
    }
    static public function getUrl(){
        return isset($_GET['url']) ? ('/'.$_GET['url']) : '/';
    }

    static public function errorPage404(){
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location: /views/errors/404.php');
    }
}