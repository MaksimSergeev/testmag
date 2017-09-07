<?php


class CabinetController
{

    public static function actionIndex() {

        require_once (ROOT . '/views/cabinet/index.php');
        return true;
    }
}