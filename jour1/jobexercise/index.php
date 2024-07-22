<?php 
$score= $_GET ["score"] ;


if ($score >10) {
    $message = "victoire ";

}
elseif($score == 10 ){
    $message = "égalité";
}
elseif ($score <10) {
        $message = "defaite";

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