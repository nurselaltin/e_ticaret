<?php


function controller($controllerName){

    return PATH.'/app/controller/'.strtolower($controllerName).'.php';
}

function view($viewName){

    return  PATH.'/app/view/'.strtolower($viewName).'.php';
}

function public_url($url = null){

    return URL.'public/'.$url;
}

function base_url($url = 'index'){

    return URL.$url;
}