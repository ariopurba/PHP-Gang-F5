<?php


$servername = 'localhost';
$username = 'root';
$password = '';

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password);

// cek koneksi
if(!$conn){
    die('Connection failed: '.mysqli_connect_error());
}
echo "Koneksi Sukses";
?>