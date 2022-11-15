<!-- <?php
// $cookie_nama = $_POST['Nama'];
// $cookie_no = $_POST['No Induk'];
// $cookie_status = $_POST['Status'];
// $cookie_minat = $_POST['Minat[]']
// setcookie($cookie_nama, $cookie_no, $cookie_status,$cookie_minat );
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content{
            border: 1px solid;
            width: 600px;
        }   
    </style>
</head>
<body>
    <div class="content">
    <h1>PENDAFTARAN PESERTA SEMINAR</h1>
    <form action="Tugas2.php" method="POST">
    <table>
    
        <tr>
            <td>No Induk</td>
            <td><input type="text" name="No Induk"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" id=""></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type="radio" name="Status" value="Dosen">Dosen</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="Status" value="Mahasiswa">Mahasiswa</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="Minat[]" value="Programming">Programming</td>
        </tr>
        <tr>
            <td>Minat</td>
            <td><input type="checkbox" name="Minat[]" value="Database">Database</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="Minat[]" value="Networking">Networking</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="Minat[]" value="Multimedia">Multimedia</td>
        </tr>
        <tr>
            <td></td>
            <td><button name="Daftar">Daftar</button></td>
        </tr>

    </table>
  </form>
    </div>
</body>
</html> -->
<?php
setcookie("nama");
setcookie("noid");
setcookie("status");
setcookie("minat");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Rashad</title>
    <style>
        p {
            font-family: monospace;
        }


        td {
            padding-bottom: 25px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_COOKIE['nama']) && isset($_COOKIE['noid']) && isset($_COOKIE['minat']) && isset($_COOKIE['status'])) {
        echo "<h1>Anda sudah terdaftar sebagai peserta Seminar</h1>";
        echo "<table border='1' cellspacing=0>
        <tr>
            <td>Nama</td>
            <td>$_COOKIE[nama]</td>
        </tr>
        <tr>
            <td>No Induk</td>
            <td>$_COOKIE[noid]</td>
        </tr>
        <tr>
            <td>umur</td>
            <td>$_COOKIE[status]</td>
        </tr>
        <tr>
            <td>Minat</td>
            <td>$_COOKIE[minat]</td>
        </tr>
        </table>";
    } else {
        echo "<form action='tugas2.php' method='POST'>
        <table>
            <tr>
                <td>No Induk</td>
                <td> </td>
                <td><input type='text' name='no'><br></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td> </td>
                <td><input type='text' name='nama'><br></td>
            </tr>
            <tr>
                <td>Status</td>
                <td> </td>
                <td>
                    <input type='radio' id='dosen' name='status' value='Dosen'>
                    <label for='dosen'>Dosen</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> </td>
                <td>
                    <input type='radio' id='mahasiswa' name='status' value='Mahasiswa'>
                    <label for='mahasiswa'>Mahasiswa</label><br>
                </td>
            </tr>
            <tr>
                <td>Minat</td>
                <td> </td>
                <td>
                    <input type='checkbox' id='program' name='minat[]' value='Programming'>
                    <label for='program'>Programming</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> </td>
                <td>
                    <input type='checkbox' id='database' name='minat[]' value='Database'>
                    <label for='database'>Database</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> </td>
                <td>
                    <input type='checkbox' id='networking' name='minat[]' value='Networking'>
                    <label for='Networking'>Networking</label><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> </td>
                <td>
                    <input type='checkbox' id='multimedia' name='minat[]' value='Multimedia'>
                    <label for='multimedia'>Multimedia</label><br>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type='submit' value='Daftar' />
                </td>
            </tr>
        </table>
    </form>";
    }
    ?>

</body>

</html>