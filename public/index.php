<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require(__DIR__.DIRECTORY_SEPARATOR."../vendor/autoload.php");
// print(__DIR__.DIRECTORY_SEPARATOR."../vendor/autoload.php");

// echo file_get_contents(__DIR__."/../vendor/autoload.php");
// echo($test);

use App\Kernel;

$kernel = new Kernel();
$kernel->run();
?>