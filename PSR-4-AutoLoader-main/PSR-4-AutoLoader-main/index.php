<?php

function autoload() {
    spl_autoload_register(function ($class) {
    $path = './src/'.str_replace('Bank\\', DIRECTORY_SEPARATOR, $class).'.php';
        if (file_exists($path)) {
            require_once $path;
            return true;
        }else {
            return false;
        }
    });
}
autoload();
$Bankomat = new Bankomat(100);
$Chelovek = new Chelovek("Слава", 10000);

$Chelovek->add_money($Bankomat, 500);
echo $Bankomat->get_fucking_money();
echo "\n";