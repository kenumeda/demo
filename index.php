<?php

    $mode = "dark"; 
    $greeting = "Hello";
    $name = "Ken";
   // data types 
    $num = 42; #interger
    $dub = 42.02; # double
    $boo = true; #true of false
    $arr = array('a','b','c');
define('DAYS_IN_YEAR', 365);
    $days = 1;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
    <link rel=""
</head>
<body <?php if ($mode === "dark"): ?>class="dark" <?php endif ?>>
<h1>

<?php if( $name === "Dave"){
    echo "Equal!";
} else {
    echo "Not Equal";
} ?>


</h1>

    
</body>
</html>