<?php

class Product {

    const SHOW_BY_DEFAULT = 9;

    # Output last insert products
    public static function getLatestProducts($page=1) {

        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        $limit = self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();

        $sql = "SELECT id, name, price, image FROM product "
                . "WHERE status = '1' ORDER BY id DESC LIMIT :limit OFFSET :offset";

        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        $result->execute();

        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $productsList;
    }
    # Output products by category
    public static function getProductListByCategory($categoryId, $page = 1) {

        if ($categoryId) {

            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            $limit = self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();

            $sql = "SELECT id, name, price, image FROM product "
                    . "WHERE status = '1' AND category_id = :category_id "
                    . "ORDER BY id ASC LIMIT :limit OFFSET :offset";

            $result = $db->prepare($sql);
            $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
            $result->bindParam(':limit', $limit, PDO::PARAM_INT);
            $result->bindParam(':offset', $offset, PDO::PARAM_INT);

            $result->execute();

            $products = array();
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }
            return $products;
        }
    }
    # Output single product by ID
    public static function getProductById($id) {

        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();
            $sql = ("SELECT * FROM product WHERE id = :id");

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            # get data like assoc array
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }
    # Output new ('is_new = 1') products
    public static function getNewProducts($count = self::SHOW_BY_DEFAULT) {

        $count = intval($count);
        $db = Db::getConnection();

        $sql = "SELECT id, name, price, image FROM product WHERE status='1' "
                . "AND is_new='1' ORDER BY id DESC LIMIT :count";

        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);

        $result->execute();

        $newProducts = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $newProducts[$i]['id'] = $row['id'];
            $newProducts[$i]['name'] = $row['name'];
            $newProducts[$i]['image'] = $row['image'];
            $newProducts[$i]['price'] = $row['price'];
            $i++;
        }
        return $newProducts;
    }
    # Output recommended ('is_recommended = 1') products
    public static function getRecommendedProducts($count = self::SHOW_BY_DEFAULT) {

        $count = intval($count);
        $db = Db::getConnection();

        $sql = "SELECT id, name, price, image FROM product WHERE status='1' "
            . "AND is_recommended='1' ORDER BY id DESC LIMIT :count";

        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->execute();

        $recommendedProducts = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $recommendedProducts[$i]['id'] = $row['id'];
            $recommendedProducts[$i]['name'] = $row['name'];
            $recommendedProducts[$i]['image'] = $row['image'];
            $recommendedProducts[$i]['price'] = $row['price'];
            $i++;
        }
        return $recommendedProducts;
    }
    # Output total products in category field for products
    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $sql = "SELECT count(id) AS count FROM product "
            . "WHERE status='1' AND category_id = :category_id";

        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $result->execute();

        $row = $result->fetch();

        return $row['count'];
    }
    # Output total products without reference to category
    public static function getTotalProducts()
    {
        $db = Db::getConnection();

        $result = $db->query("SELECT count(id) AS count FROM product "
                                . "WHERE status='1'");

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }
    # Get products by id's
    public static function getProductsByIds($idsArray) {

        $products = array();

        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['image'] = $row['image'];
            $i++;
        }
        return $products;
    }
}