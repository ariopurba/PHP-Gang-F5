<?php

$conn = mysqli_connect('localhost', 'root', '', 'inventaris');


if (isset($_POST['simpan'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $lokasi= $_POST['lokasi'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO stok_barang VALUES('$kode', '$nama', '$jenis', '$lokasi', '$harga', '$jumlah')";
    if (mysqli_query($conn, $sql)) {
        echo "Barang Berhasil Ditambah";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
?>