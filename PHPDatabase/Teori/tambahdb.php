<?php


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'platformdb';

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek Koneksi
if(!$conn){
    die("Connection Failde: ".mysqli_connect_error());
}

$sql = "INSERT INTO mahasiswa(nama, nim)
VALUES('JOHN', '205314095');";
$sql .= "INSERT INTO mahasiswa(nama, nim)
VALUES('Gab', '205314096');";
$sql .= "INSERT INTO mahasiswa(nama, nim)
VALUES('Marcel', '205314097');";

if(mysqli_multi_query($conn, $sql)){
        echo "New Records Created Successfully";
    
}else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>