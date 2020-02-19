<div class="container">
    <h1 style="text-align: center"><?=$title?></h1>
    <?foreach ($contents as $content):?>
            <div style="margin-bottom: 20px;">
            <form action="/profile/edit" method="POST">
                <h1>Имя </h1><input type="text" value="<?=$content->name?>" name="name" autocomplete="off">
                <h1>Фамилия </h1><input type="text" value="<?=$content->sname?>" name="sname" autocomplete="off">
                <h1>День рождения </h1><input type="text" value="<?=$content->hb?>" name="hb" autocomplete="off">
                <h1>Геолокация </h1><input type="text" value="<?=$content->location?>" name="location" autocomplete="off">
                <h1>Контакты </h1><input type="text" value="<?=$content->contact?>" name="contact" autocomplete="off">
                <h1>Дополнительная инфа: </h1><input type="text" value="<?=$content->addinfo?>" name="addinfo" autocomplete="off"><br><br>
                <button class="btn btn-primary" name="update">Обновить профиль</button>
            </form>
            </div>
    <? endforeach 
    ?>
                
</div>