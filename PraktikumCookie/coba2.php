<?php
    if(isset($_COOKIE['cookie1'])){
        echo "<h1>Cookie Ditemukan, nilai cookie adalah".$_COOKIE['cookie1']."</h1>";

    }else{
        echo "<h1> Maaf, Cookie Tidak Ditemukan</h1>";
    }
?>