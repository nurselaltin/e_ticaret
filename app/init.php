<?php

require  __DIR__.'/config.php';

//Sınıfları yükle--------------------------------
function loadedClasses ($folderName){

    require __DIR__.'/classes/'.strtolower($folderName).'.php';

}

spl_autoload_register('loadedClasses');

//dbye bağlantı oluştur------------------------------------------------------

try{

    $db= new BasicDb($meta['host'],$meta['dbname'],$meta['username'],$meta['pass']);

}catch(PDOException $e){
    die($e->getMessage());
};

//Helper dosyalarını yükle------------------------------------------


foreach (glob(__DIR__.'/helper/*.php') as $helperFile){

    require $helperFile;
}

