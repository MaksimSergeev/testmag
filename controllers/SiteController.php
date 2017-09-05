<?php

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        require_once(ROOT.'/views/site/index.php');
        return true;
    }

    public function actionContact()
    {

        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
}