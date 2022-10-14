<?php

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])){
    if ($_POST['username'] == "admin" && $_POST['password']== "admin123"){
        header("Location: admin.php");
        exit;
    }else{
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    if(isset($error)):
    ?>

    <p style="color:red">Mohon Maaf, anda gagal login</p>
    <?php
    endif;
    ?>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" /><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" /><br>

        <button type="submit" name="submti">Login</button>

    </form>
</body>

</html>