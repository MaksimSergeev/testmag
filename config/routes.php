<?php

return array(
    'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController
    'catalog/page-([0-9]+)' => 'catalog/index/$1', // actionIndex in CatalogController
    'catalog' => 'catalog/index', // actionIndex in CatalogController
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory in CatalogController
    'contact' => 'site/contact', // actionIndex in SiteController
    'index.php' => 'site/index', // actionIndex in SiteController
    'user/logout' => 'user/logout', // actionLogout in UserController
    'user/login' => 'user/login', // actionLogin in UserController
    'cart' => 'cart/add', // actionAdd in CartController
    'user/register' => 'user/register', // actionRegister in UserController
    'cabinet/edit' => 'cabinet/edit', // actionEdit in CabinetController
    'cabinet' => 'cabinet/index', // actionIndex in CabinetController
    '' => 'site/index', // actionIndex in SiteController

);