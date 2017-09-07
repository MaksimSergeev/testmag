<?php

class UserController {

    # Action Register (new user)
    public function actionRegister() {
        $name = '';
        $email = '';
        $password = '';
        $conf_password = '';
        $result = false;

        # check POST
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conf_password = $_POST['conf_password'];

            $errors = false;
            # Check name
            if (!User::checkName($name)) {
                $errors[] = 'Name must be at least two words!';
            }
            # Check email
            if (!User::checkEmail($email)) {
                $errors[] = 'Email incorrect!';
            }
            # Check password
            if (!User::checkDoublePassword($password, $conf_password)) {
                $errors[] = 'Passwords no equality or less than six words!';
            }
            # Check email exists
            if (User::checkEmailExists($email)) {
                $errors[] = 'This email is already in use by another user!';
            }
            # Register return: true/false
            if ($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }
        require_once (ROOT . '/views/user/register.php');
        return true;
    }

    # Action Login
    public static function actionLogin() {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            # Check email
            if (!User::checkEmail($email)) {
                $errors[] = 'Email incorrect!';
            }
            # Check password
            if (!User::checkPassword($password)) {
                $errors[] = 'Wrong password!';
            }
            # Check exists user
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                # If data wrong, output this msg
                $errors[] = 'Wrong login data!';
            } else {
                # If data ok, remember this user (session)
                User::auth($userId);
                #Rredirection user to cabinet
                header("Location: /cabinet/");
            }
        }
        require_once (ROOT . '/views/user/login.php');
        return true;
    }

    # Action Logout
    public static function actionLogout() {

        unset($_SESSION['user']);
        header("Location: /");
    }
}