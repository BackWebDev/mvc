<div class="container">
    <h1 style="text-align: center"><?=$title?></h1>
    <h2 style="text-align: center; color: #fff">Внимание!!!</h2>
    <p>Это очень ответственное действие, просим вас подумать и быть уверенным в том, что человек которого вы собираетесь отметить действительно на стороне зомби.</p>
    <form action="/survivor/markDeath" method="POST">
        <input type="hidden" name="id" value="<?=$zombi_id?>">
        <input type="checkbox" style="transform:scale(1.3); opacity:0.9; cursor:pointer;" name="zombi"><br>
        <button class="btn btn-primary" name="update">Отметить сьеденным</button>
    </form>
</div>