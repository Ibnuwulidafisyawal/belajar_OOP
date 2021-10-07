<?php

spl_autoload_register(function ($class) {
    require_once  'Produk/' . $class . '.php';
});

// function __autoload($class) {
//     $path =   'Produk/';
//     require_once  $path . $class .'.php';
//    }
   

// spl_autoload_register(function($className) {
// 	$file = $className . '.php';
// 	if (file_exists($file)) {
// 		include $file;
// 	}
// });
