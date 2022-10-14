<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi HTML</title>
</head>

<body>
    <?php
    $counter = 1;

    echo "<ul>";
    while($counter <= 5){
        echo "<li> Loop ke - $counter";
        // echo "<br>";
        $counter++;
    }
    echo "</ul>";
    ?>
</body>

</html>