cd ..cdcom<?php


require '../vendor/autoload.php';

//use App\Wcs\Hello;

//$hello = new Hello();

//echo $hello->talk();

use HelloWorld\SayHello;

 $helloKitty = new SayHello();

 echo $helloKitty->world();