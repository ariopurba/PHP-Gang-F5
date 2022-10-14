<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>

<body>
    <ol>
        <?php
        $daftarmenu = ["guded", "tongseng", "sate", "bakso"];
        foreach($daftarmenu as $menu){
            echo "<li> $menu";
        }
        ?>
    </ol>
</body>

</html>