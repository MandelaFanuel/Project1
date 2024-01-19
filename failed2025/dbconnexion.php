<?php

$hostname = 'localhost:3308';
$dbusername = 'root';
$dbuserpassword ='';
$dbname = 'upg';

if(!$conn = mysqli_connect($hostname, $dbusername, $dbuserpassword ,$dbname )){
    echo "Impossile to connect to the database";
}