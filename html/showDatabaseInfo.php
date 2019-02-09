<?php

require_once __DIR__ . "/vendor/autoload.php";

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as Capsule;

// 設定DB
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'mysql57',
    'database'  => '',
    'username'  => 'root',
    'password'  => 'my_password',
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$conn = $capsule->getConnection();
$infos = $conn->select('show databases;');
print_r($infos);
