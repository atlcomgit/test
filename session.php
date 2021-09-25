<?php
session_start();

class Session
{
    public function __construct()
    {
    }

    public static function check()
    {
        return (is_writable(session_save_path()));
    }
    public static function get($key)
    {
        return $_SESSION[$key] ?? '';
    }
    public static function set($key, $value)
    {
        return $_SESSION[$key] = $value;
    }
    public static function del($key)
    {
        unset($_SESSION[$key]);
    }
    public static function setUser($login, $password)
    {
        self::set('login', $login);
        self::set('password', $password);
    }
    public static function delUser()
    {
        self::del('login');
        self::del('password');
    }
}