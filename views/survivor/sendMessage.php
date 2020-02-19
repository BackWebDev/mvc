<div class="container">
    <h1 style="text-align: center"><?=$title?></h1>
    <form action="/survivor/sendMessage" method="POST">
        <input type="hidden" name="id" value="<?=$recipient_id?>">
        <input type="text" class="form-control" name="recipient"><br>
        <button class="btn btn-primary" name="send">Отправить сообщение</button>
    </form>
</div>