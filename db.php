<?php 

$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'bookstore';

$connect  = mysqli_connect($server, $username, $password, $database);

if(!$connect){
    echo "gagal connect database";
}