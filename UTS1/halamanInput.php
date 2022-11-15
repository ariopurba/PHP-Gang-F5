<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
    .content {
        border: 1px solid;
        width: 450px;
    }
    </style>
</head>

<body>
    <div class="content">
        <h1>Pesan Makanan dan Minuman</h1>
        <form action="halamanTampil.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama" /></td>
                </tr>
                <tr>
                    <td>Makanan: </td>
                    <td><input type="checkbox" name="makanan[]" value="Nasi Goreng" />Nasi Goreng<br></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="makanan[]" value="Mie Goreng" />Mie Goreng<br>
                        <input type="checkbox" name="makanan[]" value="Mie Godog" />Mie Godog<br>
                    </td>
                </tr>
                <tr>
                    <td>Minuman: </td>
                    <td><input type="checkbox" name="minuman[]" value="Es Teh Manis" />Es Teh Manis<br></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="minuman[]" value="Es Jeruk" />Es Jeruk<br>
                        <input type="checkbox" name="minuman[]" value="Teh Panas" />Teh Panas<br>
                        <input type="checkbox" name="minuman[]" value="Jeruk Panas" />Jerus Panas<br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <button>Simpan</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>