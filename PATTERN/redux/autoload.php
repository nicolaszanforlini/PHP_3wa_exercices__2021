<?php namespace redux_php;


    spl_autoload_register(function ($nameClass) {

//        var_dump($nameClass);

        $nameClass = substr($nameClass, 10);

        $path = str_replace("\\","/",$nameClass);
        $p = $path.".php";
//        echo $p.PHP_EOL;
        require_once __DIR__."\\".$p;
        
    });







