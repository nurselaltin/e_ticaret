<?php


$route = array_filter(explode('/',$_SERVER['REQUEST_URI']));




if(SUBFOLDER == TRUE){

    array_shift($route);
}



if(!isset($route[1])){

    $route[1] = 'index';
}


if(!file_exists(admin_controller($route[1]))){

    $route[1]='404';

}

$meta = [

    'index'  => [
        'title'  => 'Home',
        'icon'   => 'tachometer'
    ],

    'products'  => [
        'title'  => 'Products',
        'icon' => 'archive',
        'submenu' => [
            'add-product' => 'Add Product',
            'products'    => 'Products'
        ]
    ],

    'customers'  => [
        'title'  => 'Customers',
        'icon' => 'user'
    ],

    'orders'  => [
        'title'  => 'Orders',
        'icon' => 'money'
    ]

];


require  admin_controller($route[1]);