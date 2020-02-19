<div class="container">
    <h1 style="text-align: center"><?=$title?></h1>

    <form class="form-search text-center" method="POST">
        <input type="text" name="value" class="input-medium search-query">
        <button type="search" class="btn">Найти</button>
    </form>

    <table class="table">
    <thead>
        <tr>
            <th><p>Name</p></th>
            <th><p>Sname</p></th>
            <th><p>Location</p></th>
            <th><p>Contact</p></th>
            <th><p>Infected</p></th>
            <th><p>Action</p></th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0; $i<count($users); $i++):
            $user = $users[$i];
        ?>
        <tr>
            <td><p><?= $user->name ?></p></td>
            <td><p><?= $user->sname ?></p></td>
            <td><p><?= $user->location ?></p></td>
            <td><p><?= $user->contact ?></p></td>
            <td><p><?= $user->infected == 1 ?  "Yes" :  "No" ?></p></td>
            <td>
                <form style="float:left" action="/survivor/markDeath" method="POST">
                    <input type="hidden" name="id" value="<?=$user->id?>">
                    <button name="mark"><i class='fas fa-skull-crossbones'></i></button>
                </form>

                <form style="float:left" action="/survivor/sendMessage" method="POST">
                <input type="hidden" name="id" value="<?=$user->id?>">
                    <button name="sms"><i class="fas fa-sms"></i></button>
                </form>

                <form action="/survivor/viewMessage" method="POST">
                <input type="hidden" name="id" value="<?=$user->id?>">
                <input type="hidden" name="name" value="<?=$user->name?>">
                    <button name="sms"><i class="fas fa-comments"></i></button>
                </form>
            </td>
        </tr>
        <?php endfor;?>
    </tbody>
</table>
</div>