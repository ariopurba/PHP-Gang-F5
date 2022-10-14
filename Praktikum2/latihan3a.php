<?php
// echo "<h1> DAFTAR HOBI YANG KUPILIH</h1>";
// echo "<ol>";
// foreach($_POST['hobi'] as $checkbox) {
//     echo "<li>$checkbox</li>";
// }
// echo "</ol>";
// echo "<a href= './latihan3.php'>kembali</a>";
?>

<!-- kalo daftar hobi ga di ceklis, ntar eror..  -->

<?php

if(isset($_POST['hobi'])){
    echo "<h1> DAFTAR HOBI YANG KUPILIH</h1>";
    echo "<ol>";
    foreach($_POST['hobi'] as $checkbox) {
        echo "<li>$checkbox</li>";
    }
    echo "</ol>";
    echo "<a href= './latihan3.php'>kembali</a>";
}else{
echo "Data Tidak Ditemukan";
}
?>