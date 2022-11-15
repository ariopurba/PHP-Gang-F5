<?php
    session_start();
    if(! isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        session_unset();
        session_destroy();
    ?>
    <h2 class="center">Terima kasih atas kunjungannya</h2>
    <p class="center"><a href="login.php">login kembali</a></p>
</body>
</html>