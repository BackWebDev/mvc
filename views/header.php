<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel = "stylesheet" href="/assets/css/main.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <?php
        if(Session::has('user_id')){
        ?>
            <div class="navbar-nav mr-auto">
      <?
        foreach($menuItems as $key => $value){
            if($key == Router::getUrl()){
                ?>
                <a class="nav-item nav-link active" href="<?=$key?>"><?=$value?></a>
                <?
            }else{
                ?>
                <a class="nav-item nav-link" href="<?=$key?>"><?=$value?></a>
                <?
            }
        }?>
        </div>
            <a class="nav-item nav-link" href="/user/exit"><i class="fas fa-sign-out-alt"></i></a>  
          <?
        }else{
        ?>
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="/user/register">Register</a>
        <a class="nav-item navbar-nav nav-link" href="/user/login">Login</a>
        </div>
        <?}?>
      
    
  </div>
</nav>
    
