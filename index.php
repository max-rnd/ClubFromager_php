<?php

// require_once 'vendor/autoload.php';

use Model\Business\Fromage;

require 'Model/Autoloader.php';
\Model\Autoloader::register();

$f = new Fromage();

$f->setNom("Reblochon");
$f->setCreation("Haute-Savoie");
$f->setImage("reblochon.jpg");

echo '<pre>';
var_dump($f);
echo '</pre>';