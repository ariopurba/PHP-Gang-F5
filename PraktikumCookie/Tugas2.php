<?php
// if(isset($_POST['Daftar'], $_POST['Minat'] , $_POST['Nama'])){
//     echo "<h1>PENDAFTARAN BERHASIL</h1>";
//     echo "<a href= './Tugas.php'>kembali</a>";
// }else{

// }
?>
<?php

$cookie_nama = $_POST['Nama'];
$cookie_no = $_POST['No Induk'];
$cookie_status = $_POST['Status'];
$cookie_minat = $_POST['Minat'];
setcookie($cookie_nama, $cookie_no, $cookie_status,$cookie_minat);
setcookie("Minat", implode(",", $cookie_minat));
?>