<?php

class User
{
    // Insert new user in DB
    public static function register($name, $email, $password)
    {

        $db = Db::getConnection();
        $sql = 'INSERT INTO user (name, email, password) VALUES (:name, :email, :password)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    // Check name min: 2 words
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    // Check password + confirm, min: 6 words and equality
    public static function checkDoublePassword($password, $conf_password)
    {
        if ((strlen($password) >= 6) && ($password === $conf_password)) {
            return true;
        }
        return false;
    }

    // Check password, min: 6 words
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    // Check and validate email
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    // Check phone number, min: 10 words
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }

    // Check existence email
    public static function checkEmailExists($email)
    {

        $db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()) {
            return true;
        }
        return false;
    }

    // Check exists user with received parameters in DB: email, password
    public static function checkUserData($email, $password)
    {

        $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }
        return false;
    }

    // Session start and receive User - userID
    public static function auth($userId)
    {

        $_SESSION['user'] = $userId;
    }

    // Check whether the user has logged in
    public static function checkLogged()
    {

        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header("Location: /user/login");
    }

    // Check user: guest or have account
    public static function isGuest()
    {

        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    // Get information about user from DB
    public static function getUserById($id)
    {

        if ($id) {

            $db = Db::getConnection();
            $sql = "SELECT * FROM user WHERE id = :id";

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            // Get assoc array mode
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    // Edit user data
    public static function edit($userId, $name, $password)
    {

        $db = Db::getConnection();

        $sql = "UPDATE user SET name = :name, password = :password WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $userId, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }
}