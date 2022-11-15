<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_bengkel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE service (
idService INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
jenisServie VARCHAR(30) NOT NULL,
hargaService FLOAT(13) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>