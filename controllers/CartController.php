<?php

class CartController
{

    public static function actionAdd($id)
    {
        // Add product to cart with AJAX
        echo Cart::addProduct($id);
        return true;
    }

    // Remove item from cart with AJAX
    public function actionDelete($id)
    {
        $ArrToJson = array();
        $ArrToJson['countItems'] = Cart::deleteProduct($id);

        $productsInCart = Cart::getProducts();
        if ($productsInCart) {
            // Get all information about products for list
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            // Get total price
            $totalPrice = Cart::getTotalPrice($products);
        }

        if (isset($totalPrice)) {
            $ArrToJson['totalPrice'] = $totalPrice;
        } else {
            $ArrToJson['totalPrice'] = 0;
        }

        echo json_encode($ArrToJson);
        return true;
    }

    public static function actionIndex()
    {
        $productsInCart = false;
        // Get products from session
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Get all information about products for list
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            // Get total price
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/cart/index.php');
        return true;
    }

    public function actionCheckout()
    {
        // Get products from session
        $productsInCart = Cart::getProducts();
        // If there are no products, relocate user to catalog
        if ($productsInCart == false) {
            header("Location: /catalog");
        }
        // Get total price
        $productsIds = array_keys($productsInCart);
        $products = Product::getProductsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);
        // Get total products in cart
        $totalQuantity = Cart::countItems();
        // Fields for forms
        $userName = false;
        $userPhone = false;
        $userComment = false;
        // Successful order status
        $result = false;
        // Check whether the user is a guest
        if (!User::isGuest()) {
            // If the user is not a guest
            // Get information about user from DB
            $userId = User::checkLogged();
            $user = User::getUserById($userId);
            $userName = $user['name'];
        } else {
            // If the guest, the form fields will remain empty
            $userId = null;
        }
        // Form processing
        if (isset($_POST['submit'])) {
            // If the form is sent
            // Get data from form
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            // Errors
            $errors = false;
            // Validation fields
            if (!User::checkName($userName)) {
                $errors[] = 'Incorrect name';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Incorrect phone number';
            }

            if ($errors == false) {
                // If there are no errors
                // Save the order in the database
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                if ($result) {
                    // If the order was successfully saved
                    // Clear cart
                    Cart::clear();
                }
            }
        }
        require_once(ROOT . '/views/cart/checkout.php');
        return true;
    }
}