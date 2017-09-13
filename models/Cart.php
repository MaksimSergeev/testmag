<?php

// Class Cart for add products and leave an order
class Cart
{
    // Add product to cart
    public static function addProduct($id)
    {

        $id = intval($id);
        // Empty array for products in cart
        $productsInCart = array();
        // If in cart exist products (keep in session)
        if (isset($_SESSION['products'])) {
            // then fill the array with products
            $productsInCart = $_SESSION['products'];
        }
        // If product exist in cart, but add again - increase the count
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            // Add new product in cart
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;

        return self::countItems();
    }

    // Add product to cart
    public static function deleteProduct($id)
    {

        // Get an array with the identifiers and the number of items in the cart
        $productsInCart = self::getProducts();
        // Remove from the array the element with the specified id
        unset($productsInCart[$id]);
        // Write an array of products with the deleted item in session
        $_SESSION['products'] = $productsInCart;

        return self::countItems();

    }

    // Count added products to cart (in session)
    public static function countItems()
    {
        // Consider the total quantity
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;

        } else {
            return 0;
        }
    }

    // Get products from session
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    // Get total products price from cart
    public static function getTotalPrice($products)
    {
        // Get products from session
        $productsInCart = self::getProducts();

        if ($productsInCart) {
            $total = 0;
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }
}