<?php

include("config/config.php");

use app\controller\App;

spl_autoload_register("meuAutoload");

function meuAutoload($classe)
{
    $path = str_replace("\\", "/", $classe . ".class.php") ;
    if(file_exists($path))
    {
        include_once($path);
    }
}

$app = new App();
echo $app->run();

