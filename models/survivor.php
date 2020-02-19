<?php
class Survivor extends Model
{
    protected $table =  'users';

    public function updSurv($zombi, $id){
        $pz = $this->pdo->prepare("UPDATE $this->table SET infected ='$zombi' WHERE id=?");
        $pz->execute([$id]);
    }
}