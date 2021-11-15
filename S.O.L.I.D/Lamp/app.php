<?php

require_once __DIR__.'/vendor/autoload.php';

use Lamp\{Lamp,Light};

$lamp = new Lamp(new Light);

$lamp->switch();
echo $lamp->_display();
echo PHP_EOL;

$lamp->switch();
echo $lamp->_display();
echo PHP_EOL;

$lamp->switch();
echo $lamp->_display();
echo PHP_EOL;

$lamp->switch();
echo $lamp->_display();





