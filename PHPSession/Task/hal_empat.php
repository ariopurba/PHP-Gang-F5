<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   
      <?php
      if(isset($_SESSION['awal'])){
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
      }else{
        // echo "Data tidak ada";
      }
      echo  "<h1>Session Sudah dihapus</h1>  ";
    ?>
</body>
</html>