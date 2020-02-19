<?php
class Profile extends Model
{
    protected $table =  'users';

    public function fullInfo($id){
        $pz = $this->pdo->prepare('SELECT name, sname, location, hb, contact, addinfo, infected FROM '.$this->table.' WHERE id=?');
        $pz->execute([$id]);
        return $pz->fetchAll(PDO::FETCH_OBJ);
    }

    public function updateProfile($id, $name, $sname, $hb, $contact, $location, $addinfo){
        $pz = $this->pdo->prepare("UPDATE $this->table SET name ='$name', sname ='$sname', hb ='$hb', contact ='$contact', location ='$location', addinfo ='$addinfo' WHERE id=?");
        $pz->execute([$id]);
    }
}