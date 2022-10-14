<?php
$suhu = [23, 45, 36, 27, 33, 32, 30, 28, 35, 32];
// $i = 1;
// echo "<table>";
// echo "<ol>";
//     for ($j = 0; $j < count($suhu); $j++){
//     echo "<tr>";
//     echo "<td>";
//     echo "Hari Ke-$i" ;
//         $i=$i+1;
//     echo "</td>";
//     echo "<td>";
//     echo " $suhu[$j] </td>";
//     echo "</tr>";
// }
// echo "</ol>";
// echo "</table>";

// for each

echo '<table border = "1">';
    foreach ($suhu as $index => $data){
    echo "<tr>";
    echo "<td>Hari Ke-" . $index + 1;
    echo "<td> $data";
}
?>

<!-- <style>
table,
tr,
td {
    border: 1px solid;
}
</style> -->