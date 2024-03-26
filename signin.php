<?php
    session_start();
    require_once 'connect.php';

    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = md5(isset($_POST['password']) ? $_POST['password'] : '');

    $check_user = mysqli_query($connect, "SELECT * FROM `registration` WHERE `Login` = '$login' AND `Password` = '$password'");
    echo mysqli_num_rows($check_user);