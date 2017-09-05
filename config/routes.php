<?php

return array(
    'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController
    'catalog/page-([0-9]+)' => 'catalog/index/$1', // actionIndex in CatalogController
    'catalog' => 'catalog/index', // actionIndex in CatalogController
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory in CatalogController
    'contact' => 'site/contact', // actionIndex in SiteController
    'index.php' => 'site/index', // actionIndex in SiteController
    'user/login' => 'user/login', // actionLogin in UserController
    'user/register' => 'user/register', // actionRegister in UserController
    '' => 'site/index', // actionIndex in SiteController

);