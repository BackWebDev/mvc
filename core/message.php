<?
abstract class Message
{
    public static function set($type, $text){
        Session::set('message', [$type, $text]);
    }
    public static function getType(){
        if(self::has()){
            return Session::get('message')[0];
        }
        return null;    
    }
    public static function getText(){
        if(self::has()){
            $text =  Session::get('message')[1];
            Session::delete('message');
            return $text;
        }
        return null;    
    }
    public static function has(){
        return Session::has('message') ;
    }
}