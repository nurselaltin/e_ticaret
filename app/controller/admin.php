<?php



if(!route(1)){

   $route[1] = 'index';
}




if(!file_exists(admin_controller(route(1)))){
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
            'products'    => 'Products',
            'add-product' => 'Add Product',
            'add-categories' => 'Add Categories',
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