<?
require_once 'config/db.php';
spl_autoload_register(function($class){
    $coreFile = 'core/' . $class . '.php';
    if(file_exists($coreFile)){require_once $coreFile;}
});
session_start();
Router::start();


