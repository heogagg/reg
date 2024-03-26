<?php
    session_start();
    require_once 'connect.php';

    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $password_again = isset($_POST['password_again']) ? $_POST['password_again'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

if ($password === $password_again) {

    //хэширование паролей
    $password = md5($password);
    $password_again = md5($password_again);

    mysqli_query($connect, "INSERT INTO `registration` (`id_user`, `Login`, `Password`, `PasswordAgain`, `Email`) VALUES (NULL, '$login', '$password', ' $password_again', '$email')");
    $_SESSION['message'] = 'Регистрация произошла успешно';
    header('location: index.php');

} else {
     $_SESSION['message'] = 'Пароли не совпадают';
     header('Location: register.php'); }

