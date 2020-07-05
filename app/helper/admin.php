<?php

function admin_controller($controllerName){

    return PATH.'/admin/controller/'.strtolower($controllerName).'.php';

}

function admin_view($viewName){

    return PATH.'/admin/view/'.strtolower($viewName).'.php';

}

function admin_url($url = false){

    return URL.'admin/'.$url;
}


function admin_public_url($url = false){

    return URL.'admin/public/'.$url;

}


