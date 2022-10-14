<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form {
        width: 300px;
        border: 1px solid;
    }
    </style>
</head>

<body>
    <form action="latihan1b.php" method="POST">
        <table>
            <tr>
                <td>NIM :</td>
                <td><input type="text" name="NIM" value="" /></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="Nama" value="" /></td>
            </tr>
            <tr>
                <td><label for="status">Status Kelulusan:</label></td>
                <td><select name="listkelulusan">
                        <option value="Memuaskan">Memuaskan</option>
                        <option value="Baik">Baik</option>
                        <option value="Biasa">Biasa</option>
                    </select></td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="SubmitData"></td>
            </tr>



        </table>
    </form>
</body>

</html>