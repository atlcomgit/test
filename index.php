<?php // http://test/
spl_autoload_register(function ($class) {
    include "$class.php";
});

if (!Session::check()) die('Ошибка сессии');
if (isset($_GET['logout'])) {
    Session::delUser();
    header('Location:/');
    return;
}
if (!User::auth()) {
    /** Пользователь не авторизован*/
    if (isset($_POST['login']) && isset($_POST['password']) && User::check($_POST['login'], $_POST['password'])) {
        Session::setUser($_POST['login'], $_POST['password']);
    } else {
        echo User::getForm();
        return;
    }
}

echo "<a href='/?logout'>Выход</a>";