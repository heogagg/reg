<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<!--Авторизация-->

<form action="">
    <lable>Логин</lable>
    <input type="text" name="login" placeholder="Введите свой логин...">
    <lable>Пароль</lable>
    <input type="password" name="password" placeholder="Введите пароль...">
    <button type="submit">Войти</button>
    <p>
        Нет аккаунта?
        <a href="register.php">Зарегестрируйтесь</a>!
    </p>

        <?php
        if (isset($_SESSION['message']))
        {
            echo '<p class="msg"> '. $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>

</form>

</body>
</html>