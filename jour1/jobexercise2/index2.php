<?php 

$poke= $_GET ["poke"] ;
$message="";

if ($poke ==1) {
    $message = "pika ";

}
if($poke ==2 ){
    $message = "Bulbizare";
}
if ($poke ==3) {
        $message = "dracaufeu";

    }

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?=$message?></h1>

    
</body>
</html>