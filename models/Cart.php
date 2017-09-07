<?php

# Class Cart for add products and leave an order
class Cart
{
    # Add product to cart ??????????????????????????????????????????????????/
    public static function addProduct($id) {

        $id = intval($id);

        # Empty array for products in cart
        $productsInCart = array();

        # If in cart exist products (keep in session)
        if (isset($_SESSION['products'])) {
            # then fill the array with products
            $productsInCart =$_SESSION['products'];
        }

        # If product exist in cart, but add again - increase the count
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart['$id'] ++;
        } else {
            # Add new product in cart
            $productsInCart['$id'] = 1;
        }

        $_SESSION['products'] = $productsInCart;
    }

}