<?php
abstract class Model
{
    protected $pdo;
    public function __construct(){
        $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
    }

    public function all($id, $value){
        if($value){
            return $this->pdo->query("SELECT * FROM ".$this->table." WHERE id !=".$id." AND (location = '$value' OR name = '$value') ORDER BY `lastvisit` DESC")->fetchAll(PDO::FETCH_OBJ);
        }
        return $this->pdo->query("SELECT * FROM ".$this->table." WHERE id !=".$id." ORDER BY `lastvisit` DESC")->fetchAll(PDO::FETCH_OBJ);
    }

}