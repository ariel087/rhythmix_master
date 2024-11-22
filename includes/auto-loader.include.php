<?php 
spl_autoload_register('autoLoader');

function autoLoader($classname){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'includes') !== false){
        $path = "../classes/";
    }
    else{
        $path = "./classes/";
    
    }
    $extension = '.class.php';



    $fullPath = $path.$classname.$extension;

    if(!file_exists($fullPath)){
        return false;    
    }
    include $fullPath;
}