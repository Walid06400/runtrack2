<?php 
    $str = "laplateforme";
    $str2 = "vive ";
    $str3 = "!";
    $str4 = $str2 . $str . $str3 ;
    $val = 6;
    $val += 4;
    


    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Hello <?php=$str; ?></h1>
<p>Bonjour <?=$str4;?></p>
<p> <?php echo $str4; ?></p>
<p> <?=$val;?></p>
<p> <?=$val;?></p>



</body>
</html>