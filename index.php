<?php

require  __DIR__.'/app/init.php';


$route = array_filter(explode('/', $_SERVER['REQUEST_URI']));
//IYS_MVC klasör adını diziden kaldıralım
if(SUBFOLDER == TRUE){
    array_shift($route);
}

//Eğer route[0] herhangi bir değer atanmamışsa
if(!isset($route[0])){

    $route[0] = 'index';
}


//Yazılan değer yanlış ise 404 sayfasına yönlendir

if(!file_exists(controller($route[0]))){

    $route[0] = '404';
}


require  controller($route[0]);












