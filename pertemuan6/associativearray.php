<?php
$staff = [
    [
        "nama" => "Marta",
        "NoHp" => "0812000",
        "email" => "marta@gmail.com",
        "jenis_kelamin" => "wanita",
        "gambar" => "woman.jpg"
    ],
    [
        "nama" => "Arta",
        "NoHp" => "0812200",
        "email" => "arta@gmail.com",
        "jenis_kelamin" => "wanita",
        "gambar" => "woman2.jpg"
    ],
    [
        "nama" => "Maram",
        "NoHp" => "0822000",
        "email" => "maram@gmail.com",
        "jenis_kelamin" => "wanita",
        "gambar" => "woman3.jpg"
    ],[
        "nama" => "arya",
        "NoHp" => "084500",
        "email" => "arya@gmail.com",
        "jenis_kelamin" => "pria",
        "gambar" => "men1.jpg"
    ],[
        "nama" => "ario",
        "NoHp" => "0812630",
        "email" => "ario@gmail.com",
        "jenis_kelamin" => "pria",
        "gambar" => "men2.jpg"
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>

<body>
    <h1>Daftar Staff</h1>
    <?php
    foreach($staff as $st):
    ?>
    <ul>
        <li>
            <img src="img/<?= $st["gambar"]; ?>">
        </li>
        <li>Nama :
            <?=$st["nama"];
        ?>
        </li>
        <li>NoHP :
            <?=$st["NoHp"];
        ?>
        </li>
        <li>email :
            <?=$st["email"];
        ?>
        </li>
        <li>jenis kelamin :
            <?=$st["jenis_kelamin"];
        ?>
        </li>
    </ul>
    <?php
    endforeach;
    ?>
</body>

</html>