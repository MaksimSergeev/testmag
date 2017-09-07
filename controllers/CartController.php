<?php


class CartController
{

    public static function actionAdd($id) {

        # Add product to cart
        Cart::addProduct($id);

    }
}