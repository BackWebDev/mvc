<?php
class Message extends Model
{
    protected $table =  'messages';

    public function sendMessage($sender_id, $recipient_id, $text, $date, $hour){
        $pz = $this->pdo->prepare('INSERT INTO '.$this->table.' (sender_id, recipient_id, text, sent_date, sent_time) VALUES(:s, :r, :t, :sd, :st)');
            $pz->execute([
                's'   => $sender_id,
                'r'   => $recipient_id,
                't'   => $text,
                'sd'  => $date,
                'st'  => $hour,
            ]);
            return $this->pdo->lastInsertId();
    }

    public function getMessage($sender_id, $recipient_id){
        $pz = $this->pdo->prepare('SELECT * FROM '.$this->table.' WHERE (sender_id=? AND recipient_id=?) OR (recipient_id=? AND sender_id=?) ORDER BY sent_date, sent_time');
        $pz->execute([$sender_id, $recipient_id, $sender_id, $recipient_id]);
        return $pz->fetchAll(PDO::FETCH_OBJ);
    }

}