<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1b</title>
    <style>
    .content {
        border: 1px solid;
        width: 680px;
        padding: 5px;
    }
    </style>
</head>

<body>
    <div class="content">
        <h1>STATUS KELULUSAN MAHASISWA</h1>
        Mahasiswa dengan Nama <?php
    // $status = $_POST['listkelulusan'];
    echo $_POST["Nama"];
    echo " NIM ";
    echo $_POST["NIM"];
    echo " Berhasil Menyelesaikan studi S1 dengan predikat ";
    echo $_POST["listkelulusan"];
    // echo $status;
    ?>
    </div>
</body>

</html>