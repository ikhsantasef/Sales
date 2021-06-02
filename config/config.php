<?php  

date_default_timezone_set('Asia/Jakarta');
ob_start();
session_start();


$host = "localhost";
$username = "root";
$password = ""; 
$db = "toko"; 

$koneksi = mysqli_connect($host, $username, $password, $db);


if(!$koneksi){
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


?>