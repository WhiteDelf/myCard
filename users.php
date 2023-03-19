<?php
include $_SERVER['DOCUMENT_ROOT']."/4000/dinamic-site/app/database/db.php";

$isSubmit = false;
$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);



    if($login === '' || $email === '' || $pass === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif( mb_strlen($login, 'UTF-8') <2){
        $errMsg ="логин должен быть больше двух символов";
    }else{

        $params =[
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $pass
        ];
          //  $id = insert('users',$params);


       $_SESSION['login'] = $params['username'];
        $_SESSION['admin'] = $params['admin'];
        header('Location: http://localhost/4000/dinamic-site/111.php');

      //  $isSubmit = true;
       // tt( $_SESSION);

    }



}else{

}

