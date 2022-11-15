<html>
    <head>
        <title>Menghitung Kunjungan </title>

    </head>
    <body>
        <?php
        if(isset($_COOKIE['counter'])){
            $c = $_COOKIE['counter'];
            $c = $c +1;
            setcookie("counter", $c);
            echo "<h1> Anda Sudah Mengunjungi Tab ini sebanyak".$c."Kali</h1>";
        }else{
            echo "<h1> Anda Sudah Mengunjungi Tab ini sebanyak 1 Kali</h1>";
            setcookie("counter", "0");
        }
        ?>
    </body>
</html>