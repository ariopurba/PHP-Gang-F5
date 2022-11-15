<?php
setcookie("nama");
setcookie("NoId");
setcookie("status");
setcookie("minat");
?>

<html>
    <head>
        <title>Membuat Form Pendaftaran Seminar</title>
        <style>
            div{
            border: 1px solid;
            width: 600px;
            }
    </style>
    </head>
    <body>
        <?php

    if (isset($_COOKIE['nama']) && isset($_COOKIE['NoId']) && isset($_COOKIE['minat']) && isset($_COOKIE['status'])) {
    echo "<div><h1>ANDA SUDAH TERDAFTAR SEBAGAI PESERTA SEMINAR</h1>";
    echo "<table border='1' cellspacing=0>
    <tr>
        <td>Nama</td>
        <td>$_COOKIE[nama]</td>
    </tr>
    <tr>
        <td>No Induk</td>
        <td>$_COOKIE[NoId]</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>$_COOKIE[status]</td>
    </tr>
    <tr>
        <td>Minat</td>
        <td>$_COOKIE[minat]</td>
    </tr>
    </table>";
    echo "</div>";
}
        else{
        echo "<div><h1>PENDAFTARAN PESERTA SEMINAR</h1>";
        echo "<form action='task2.php' method='POST'>
        <table>
            <tr>
                <td>No Induk</td>
                <td> </td>
                <td><input type='text' name='NoId'><br></td>
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
    echo "</div>";

    };

// }

        ?>
    </body>
</html>