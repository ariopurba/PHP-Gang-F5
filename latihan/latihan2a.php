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
        width: 400px;
    }
    </style>
</head>

<body>
    <div class="content">
        <h1>FORM BIODATA</h1>
        <form action="latihan2b.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama" /></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input type="text" name="alamat" /></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>: <input type="text" name="umur" /></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin: </td>
                    <td><input type="radio" name="jeniskelamin" value="Pria" />Pria
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="radio" name="jeniskelamin" value="Wanita" />Wanita</td>
                </tr>
                <tr>
                    <td>Hobby: </td>
                    <td><input type="checkbox" name="hoby[]" value="Music" />Music<br></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="hoby[]" value="Programming" />Programming<br>
                        <input type="checkbox" name="hoby[]" value="Game" />Game<br>
                        <input type="checkbox" name="hoby[]" value="Movies" />Movies<br>
                        <input type="checkbox" name="hoby[]" value="Travelling" />Travelling<br>
                        <input type="checkbox" name="hoby[]" value="Sport" />Sport<br>
                        <input type="checkbox" name="hoby[]" value="Organization" />Organization<br>
                        <input type="checkbox" name="hoby[]" value="Automotive" />Automotive<br>
                    </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>