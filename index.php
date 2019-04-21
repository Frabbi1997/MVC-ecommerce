<?php
require_once 'vendor/autoload.php';

$user_maneger = new App\Maneger\User();
var_dump($user_maneger);
  echo '<hr/>';

$user_admin = new App\Admin\User();
var_dump($user_admin);
echo '<hr/>';

$user = new App\User();

var_dump($user);
