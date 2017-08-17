<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';
class CatalogController
{
    public function actionIndex()
    {
        //$categories = array();
       // $categories = Product::getLatestProducts(9);
        require_once (ROOT . '/views/catalog/index.php');
        return true;
    }


}