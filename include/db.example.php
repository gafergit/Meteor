<?php
require  'DBClass.php';
use Medoo\Medoo;

$database = new Medoo([
   // required
   'database_type' => 'mysql',
   'database_name' => 'dbname',
   'server' => 'localhost',
   'username' => 'root',
   'password' => 'root',

   // [optional]
   'charset' => 'utf8',
   'port' => 3306,
]);