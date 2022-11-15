<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventaris";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (isset($_POST['simpan'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $lokasi= $_POST['lokasi'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO stok_barang VALUES('$kode', '$nama', '$jenis', '$lokasi', '$harga', '$jumlah')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

if(isset($_POST['update'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $lokasi= $_POST['lokasi'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE stok_barang SET
    kode = '$kode', 
    nama = '$nama',
    jenis ='$jenis',
    lokasi = '$lokasi',
    harga= '$harga',
    jumlah = '$jumlah'
    ";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}
if(isset($_POST['hapus'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $lokasi= $_POST['lokasi'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "DELETE FROM stok_barang WHERE kode = '$kode'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Stok Gudang</title>
</head>
<body>
    <div class="judul">
        <h3>INPUT STOK GUDANG <br>TOKO KELONTONG BAHAGIA</h3>
        <a href="daftar_stok.php">| Lihat Daftar Stok |</a><br></br>
    </div>
    <div>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td><input type="text" name="kode" id="kode"></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td><input type="radio" name="jenis" id="jenis" value="Makanan">Makanan</td>
                </tr>
                <tr>
                <td></td>
                    <td><input type="radio" name="jenis" id="jenis" value="Non Makanan">Non Makanan</td>
                </tr>
                <tr>
                    <td>lokasi</td>
                    <td><select name="lokasi" id="lokasi">
                        <option value="Rak A">Rak A</option>
                        <option value="Rak B">Rak B</option>
                        <option value="Rak C">Rak C</option>
                        <option value="Rak D">Rak D</option>
                        <option value="Rak E">Rak E</option>
                    </select></td>
                </tr>   
                <tr>
                    <td>Harga Satuan</td>
                    <td><input type="number" name="harga" id="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah Stok</td>
                    <td><input type="number" name="jumlah" id="jumlah"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                    <td><input type="submit" name="update" value="Update"></td>
                    <td><input type="submit" name="hapus" value="Hapus"></td>
                </tr>
             
            </table>
        </form>
    </div>
</body>
</html>