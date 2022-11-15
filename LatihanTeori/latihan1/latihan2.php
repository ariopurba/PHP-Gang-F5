<?php
$arr = array(3, 2, 5, 3, 7);


echo array_sum($arr)/ count(array_filter($arr));
echo "<br>";
// $count =0;
$sum = 0;
foreach($arr as $value){
    $sum += $value;
    // $count++;
}
echo $sum/count($arr);
?>