<?php

require_once "vendor/autoload.php";

use App\Controllers\Admin\UserController as AdminController;
use App\Controllers\Frontend\UserController as FrontendController;




$admin =new AdminController();
$user=new FrontendController();


echo $admin->getUser();
echo $user->getUser();