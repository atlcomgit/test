<?php

class User
{
    public function __construct()
    {
    }

    public static function auth()
    {
        return (Session::get('login') != '');
    }
    public static function check($login, $password)
    {
        return ($login == 'admin' && $password == '123');
    }
    public static function getForm()
    {
        return "
            <form method='post'>
                Логин: <input type='text' size='10' maxlength='32' name='login'>
                Пароль: <input type='password' size='33' maxlength='32' name='password'>
                <input type=submit value='OK'>
            </form>";
    }
}