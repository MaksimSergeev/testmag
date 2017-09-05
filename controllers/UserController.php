<?php


class UserController
{
    public function actionRegister()
    {

        require_once (ROOT . '/views/user/register.php');
        return true;
    }
    public static function actionLogin()
    {

        require_once (ROOT . '/views/user/login.php');
        return true;
    }
}