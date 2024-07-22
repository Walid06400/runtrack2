<?php
$etudiant= $_GET [ "stud"];
$painauchocolat= 0;
$croissants=0;
$brioche=0;



if ( $etudiant=="Theo") {
    $painauchocolat= 3; 
    $brioche=2;
    $croissant=0;
}

if ($etudiant=="Walid") {
    $painauchocolat=7; 
    $croissant=6;
    
}

echo  "j'ai" . $painauchocolat . "pain au chocolat" . "<br>";  
echo  "j'ai" . $croissant . "croissant" . "<br>"; 
echo  "j'ai" . $brioche . "brioche";

?>