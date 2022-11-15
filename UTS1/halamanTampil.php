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

    <?php

    $nama = $_POST["nama"];

    echo "<h1> Tampilkan Pesanan</h1>";
    echo "$nama Memesan<br><br>";

    echo "Makanan";

    echo "<ol>";
    foreach($_POST['makanan'] as $checkbox) {
        echo "<li>$checkbox</li>";
    }
    echo "</ol>";
    echo "Minuman";
    echo "<ol>";
    foreach($_POST['minuman'] as $checkbox) {
        echo "<li>$checkbox</li>";
    }
    echo "</ol>";
    echo "<a href= './halamanInput.php'>kembali</a>";

?>
    </div>
</body>

</html>