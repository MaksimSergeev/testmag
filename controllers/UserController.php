<?php


class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $conf_password = '';

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conf_password = $_POST['conf_password'];
        }

        require_once (ROOT . '/views/user/register.php');
        return true;
    }
    public static function actionLogin()
    {

        require_once (ROOT . '/views/user/login.php');
        return true;
    }
}