<html>
    <head>
        <title>Halaman Respon</title>
    </head>
    <body>
        <?php
            echo "<h1>Pendaftaran Berhasil</h1>";
            setcookie("NoId", $_POST['NoId']);
            setcookie("nama", $_POST['nama']);
            setcookie("status", $_POST['status']);
            setcookie('minat', implode(",", $_POST['minat']), time() + 3600);   
            
        ?>
    </body>
</html>