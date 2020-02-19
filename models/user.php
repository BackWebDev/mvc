<?php
class User extends Model
{
    protected $table =  'users';

    public function addUser($email, $password, $name, $sname, $hb, $location, $contact, $addinfo, $infected = 0){
            $pz = $this->pdo->prepare('INSERT INTO users(email, password, name, sname, hb, location, contact, addinfo, infected) VALUES(:e, :p, :n, :sn, :h, :l, :c, :add, :i)');
            $pz->execute([
                'e'   => $email,
                'p'   => $password,
                'n'   => $name,
                'sn'  => $sname,
                'h'   => $hb,
                'l'   => $location,
                'c'   => $contact,
                'add' => $addinfo,
                'i'   => $infected,
            ]);
            return $this->pdo->lastInsertId();
    }

    public function addCurrentTime($id, $date){
        return $this->pdo->query("UPDATE ".$this->table." SET lastvisit='$date' WHERE id =".$id)->fetchAll(PDO::FETCH_OBJ);
    }

    public function checkEmail($email){
        $pz = $this->pdo->prepare('SELECT email FROM '.$this->table.' WHERE email=?');
        $pz->execute([$email]);
        return $pz->rowCount();
    }

    public function checkUser($email, $password){
        $pz = $this->pdo->prepare('SELECT * FROM '.$this->table.' WHERE email=? AND password=?');
        $pz->execute([$email, $password]);
        return $pz->fetch(PDO::FETCH_OBJ);
    }

    public function deleteUser($id){
        $pz = $this->pdo->prepare('DELETE FROM '.$this->table.' WHERE id=?');
        return $pz->execute([$id]);
    }
}