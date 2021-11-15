<?php

spl_autoload_register(function($className) {
    var_dump($className);


    $nameClass = substr($nameClass, 4);

    $path = str_replace("\\","/",$nameClass);
    echo $path.PHP_EOL;
    require_once __DIR__."/src/$path.php";


});






