<?php
session_start();
require  __DIR__.'/app/init.php';

//get ile id gönderebilmek ? ile için urli parçalamamız lazım.Aksi halde controller adını product?id=2 şeklinde arıyor.
$routeExplode = explode('?',$_SERVER['REQUEST_URI']);


//array_filter():[0].indeksin boş değer aldığı için kaldırıyoruz.
$route = array_filter(explode('/',$routeExplode[0]));
//IYS_MVC klasör adını diziden kaldıralım
if(SUBFOLDER == TRUE){
    array_shift($route);
}

//Eğer route[0] herhangi bir değer atanmamışsa
if(!isset($route[0])){

    $route[0] = 'index';
}


//Yazılan değer yanlış ise 404 sayfasına yönlendir


if(!file_exists(controller(route(0)))){
    $route[0] = '404';
}


require  controller($route[0]);












