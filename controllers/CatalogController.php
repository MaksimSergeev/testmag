<?php

class CatalogController {
    public function actionIndex($page = 1) {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts($page);

        $total = Product::getTotalProducts();

        $recommendedProducts = array();
        $recommendedProducts = Product::getRecommendedProducts(2);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once (ROOT . '/views/catalog/index.php');
        return true;
    }

    public function actionCategory($categoryId, $page = 1) {
        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductListByCategory($categoryId, $page);

        $recommendedProducts = array();
        $recommendedProducts = Product::getRecommendedProducts(2);

        $total = Product::getTotalProductsInCategory($categoryId);
        # create object Pagination - page navigation
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once (ROOT . '/views/catalog/category.php');

        return true;
    }

}