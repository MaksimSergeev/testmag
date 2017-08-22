<?php
include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class ProductController
{
    public function actionView($Id)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productItem = array();
        $productItem = Product::getProductById($Id);

        $newProducts = array();
        $newProducts = Product::getNewProducts(3);

        require_once (ROOT.'/views/product/view.php');
        return true;
    }
}