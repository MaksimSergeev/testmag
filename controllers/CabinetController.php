<?php

class CabinetController
{

    public static function actionIndex()
    {
        // Get User id from session
        $userId = User::checkLogged();
        // Get information about user from DB
        $user = User::getUserById($userId);

        require_once (ROOT . '/views/cabinet/index.php');
        return true;
    }

    public static function actionEdit()
    {
        // Get User id from session (check user logged or not)
        $userId = User::checkLogged();
        // Get information about user from DB (name and password)
        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Name can not be shorter than two words!';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Password can not be shorter than six words!';
            }

            if ($errors == false) {
                $result = User::edit($userId, $name, $password);
            }
        }

        require_once (ROOT . '/views/cabinet/edit.php');
        return true;
    }
}