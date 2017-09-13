<?php

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

        $recommendedProducts = array();
        $recommendedProducts = Product::getRecommendedProducts(2);

        require_once (ROOT.'/views/product/view.php');
        return true;
    }
}