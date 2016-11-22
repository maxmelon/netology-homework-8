<?php
include  'functions.php';
session_start();
if (!empty($_POST['Auth'])) {
    $isLogged = login($_POST['Auth']['login'], $_POST['Auth']['password'], 'admin.json');
    if ($isLogged) {
        header('Location: ' . getHomepagePath());
    } else {
        header('Location: ' . getLoginPath());
        die;
    }
}
if (isLogged()) {
    header('Location: ' . getHomepagePath());
}
if (!empty($_POST['guest'])) {
    $_SESSION['guest'] = $_POST['guest'];
    header('Location: ' . getHomepagePath());
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= getError() ?>
<form method="post">
    <label for="login">Логин:</label>
    <input id="login" name="Auth[login]">
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="Auth[password]">
    <button type="submit">Войти</button>
</form>
<form method="post">
    <label for="guest">Чтобы войти как гость, введите Ваше имя:</label>
    <input id="guest" name="guest">
    <button type="submit">Продолжить</button>
</form>
</body>
</html>
<? clearError(); ?>

