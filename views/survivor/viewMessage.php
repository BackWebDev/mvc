<div class="container">
    <h1 style="text-align: center"><?=$title?> с <?=$recipient_name?></h1>
    
    <?php for($i=0; $i<count($messages); $i++):
            $message = $messages[$i];
            if($sender_id == $message->sender_id){
                ?>
                <div style="float: left">
                    <p style="font-size: 24px"><?= $message->text ?><br><span style="font-size: 14px"><?= $message->sent_time ?></span></p>
                </div>
                <br><br><br><br>
                <?php
            }
            else{
                ?>
                <div style="float: right">
                    <p style="font-size: 24px"><?= $message->text ?><br><span style="font-size: 14px"><?= $message->sent_time ?></span></p>
                </div>
                <br><br><br><br>
                <?php
            }
            ?>
            <?php
         endfor;?>
</div>