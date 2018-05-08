<?php
require  'vendor/autoload.php';

use MyApi\Controllers\CategoriaController;

$c = new CategoriaController();
echo $c->get();