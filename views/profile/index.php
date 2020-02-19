<div class="container">
    <h1 style="text-align: center"><?=$title?></h1>
    <?foreach ($contents as $content):?>
            <div style="margin-bottom: 20px;">
                <h1>Имя <?=$content->name?></h1>
                <h1>Фамилия <?=$content->sname?></h1>
                <h1>День рождения <?=$content->hb?></h1>
                <h1>Геолокация <?=$content->location?></h1>
                <h1>Контакты <?=$content->contact?></h1>
                <h1>Дополнительная инфа: <?=$content->addinfo?></h1>

                
            </div>
    <? endforeach 
    ?>
                <form action="/profile" method="POST">
                    <button class="btn btn-primary" name="update">Редактировать профиль</button>
                </form>

</div>