<?php


class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $conf_password = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conf_password = $_POST['conf_password'];

            $errors = false;
            // Check name
            if (!User::checkName($name)) {
                $errors[] = 'Name must be at least two words!';
            }
            // Check email
            if (!User::checkEmail($email)) {
                $errors[] = 'Email incorrect!';
            }
            // Check password
            if (!User::checkPassword($password, $conf_password)) {
                $errors[] = 'Passwords no equality or less than six words!';
            }
            // Check email exists
            if (User::checkEmailExists($email)) {
                $errors[] = 'This email is already in use by another user!';
            }
            // Register and return: true/false
            if ($errors == false) {
                $result = User::register($name, $email, $password);
            }
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