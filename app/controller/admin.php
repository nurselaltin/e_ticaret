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


require  admin_controller($route[1]);