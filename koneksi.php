<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'getcrypto-db';

// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if(!$koneksi) {
    die('Connection Failed:' . mysqli_connect_error());
}
 ?>
