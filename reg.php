<?php
    include "path.php";
    include "app/controllers/users.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/hi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>my Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<body>

<!--php kod -->
<?php include("app/include/header.php"); ?>

<div class="container">
<form class="row justify-content-center" method="post" action="reg.php">
    <div class="mb-3 col-12 col-md-4 err">
        <p class="text-center mt-2"><?=$errMsg??''?></p>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <!--php kod -->

        <label for="login" class="form-label">Login</label>
        <input name="login" type="text" class="form-control" id="login" aria-describedby="loginHelp">
        <div id="loginHelp" class="form-text">Мы никогда не передадим вашу электронную почту кому-либо еще.</div>
    </div>


    <div class="w-100"></div>

    <div class="mb-3 col-12 col-md-4">
        <!--php kod -->

        <label for="email" class="form-label">Адрес электронной почты</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Мы никогда не передадим вашу электронную почту кому-либо еще.</div>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">

        <label for="password" class="form-label">Пароль</label>
        <div class="w-100"></div>
        <input name="pass" type="password" class="form-control" id="password">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">

       <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->

    </div>
    <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            <a href="aut.html">Авторизация</a>
        </div>

</form>
</div>

