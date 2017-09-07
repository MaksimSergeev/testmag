<?php

class Product
{
    const SHOW_BY_DEFAULT = 9;

    public static function getLatestProducts($page=1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();
        $productsList = array();

        $result =$db->query("SELECT id, name, price, image FROM product "
            . "WHERE status = '1' "
            . "ORDER BY id DESC "
            . "LIMIT " . self::SHOW_BY_DEFAULT
            . " OFFSET " . $offset);

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

    public static function getProductListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $products =array();
            $result =$db->query("SELECT id, name, price, image FROM product "
                . "WHERE status = '1' AND category_id = '$categoryId' "
                . "ORDER BY id DESC "
                . "LIMIT " . self::SHOW_BY_DEFAULT
                . " OFFSET " . $offset);

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

    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM product WHERE id = '$id' ");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public static function getNewProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $newProducts = array();

        $result = $db->query('SELECT id, name, price, image, is_new FROM product WHERE status="1"'
            . ' and is_new="1" ORDER BY id DESC LIMIT '. $count);

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

    public static function getRecommendedProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $recommendedProducts = array();

        $result = $db->query('SELECT id, name, price, image FROM product WHERE status="1"'
            . ' and is_recommended="1" ORDER BY id DESC LIMIT '. $count);

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

    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="1" AND category_id = '. $categoryId);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    public static function getTotalProducts()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="1"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }
}