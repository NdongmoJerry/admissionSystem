<?php


$host = 'localhost';
$dbname = 'admission';
$username = 'Jerry';
$password = 'Jerry237';
$socket = '/opt/lampp/var/mysql/mysql.sock'; // Path to the MySQL socket file in XAMPP

$con = mysqli_connect($host, $username, $password, $dbname, null, $socket);

if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}


?>