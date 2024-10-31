<?php

include "vendor/autoload.php";

use App\Product;
use App\User;

$user= new User();
$p1=new Product();
echo $p1->productId;
echo PHP_EOL;

echo $user->name;