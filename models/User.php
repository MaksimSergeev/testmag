<?php

class User
{
    //Insert new user in DB
    public static function register($name, $email, $password) {

        $db = Db::getConnection();
        $sql = 'INSERT INTO user (name, email, password) VALUES (:name, :email, :password)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }
    // Check name min: 2 words
    public static function checkName($name) {
        if(strlen($name) >= 2) {
            return true;
        }
        return false;
    }
    // Check password + confirm, min: 6 words and equality
    public static function checkPassword($password, $conf_password) {
        if((strlen($password) >= 6) && ($password === $conf_password)) {
            return true;
        }
        return false;
    }
    // Check and validate email
    public static function checkEmail($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    // Check existence email
    public static function checkEmailExists($email) {

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
}