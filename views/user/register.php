<div class="container">
    <h1 style="text-align: center"><?=$title?></h1>
    
    <?
    if( Message::has() ){
    ?>
        <div class="alert alert-<?= Message::getType() ?>">
            <?= Message::getText() ?>
        </div>
    <? 
    }
    ?>
    <div class="row justify-content-center">
        <form method="POST" action="/user/register">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputSurname1">Sname</label>
                <input type="text" name="sname" class="form-control" id="exampleInputSurname1" placeholder="Surname" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputHB1">HB</label>
                <input type="text" name="hb" class="form-control" id="exampleInputHB1" placeholder="HB" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputLocation1">Location</label>
                <input type="text" name="location" class="form-control" id="exampleInputLocation1" placeholder="Location" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputContact1">Contact</label>
                <input type="text" name="contact" class="form-control" id="exampleInputContact1" placeholder="Contact" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputAddinfo1">Addinfo</label>
                <input type="text" name="addinfo" class="form-control" id="exampleInputAddinfo1" placeholder="Addinfo" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>