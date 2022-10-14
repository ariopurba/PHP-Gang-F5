<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .content {
        border: 1px solid;
        width: 600px;
        padding: 5px;

    }


    th,
    td {
        border: 1px solid;
    }
    </style>
</head>

<body>
    <div class="content">
        <h1>FORM BIODATA - REVIEW</h1>
        <form action="#">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><?php
                echo $_POST["nama"];
                ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php
                echo $_POST["alamat"];
                ?></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><?php
                echo $_POST["umur"];
                ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php
                echo $_POST["jeniskelamin"];
                ?></td>
                </tr>
                <tr>
                    <td>Hobby</td>
                    <td><?php
                foreach($_POST['hoby'] as $checkbox) {
                        echo $checkbox.", ";
              }
                ?></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>