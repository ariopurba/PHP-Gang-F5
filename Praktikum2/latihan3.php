<?php
$daftarHobi = ["Sepakbola",
"Renang",
"Nonton Bioskop",
"Main Game",
"Shopping"];

echo "<h1> DAFTAR HOBI</h1>";
echo "<form action= 'latihan3a.php' method = 'POST'>";
echo "<table>";
echo "<tr><td>Hobi";
foreach ($daftarHobi as $dh){
    
    echo "<tr><td><td><input name = 'hobi[]' value = '$dh' type ='checkbox'/>$dh";
    echo "<br>";
}
echo "<input type = 'submit' />";
echo "</form>";
?>