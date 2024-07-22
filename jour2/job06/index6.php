<?php 
$largeur=20;
$hauteur=10;
$colonne=0;
$ligne= 0;
             

while ($ligne < $largeur) {
    echo "_";
    $ligne++;
}
    echo "<br/>";
    $ligne = 0;

while ($colonne <=8) {   
  
    $colonne++;

    while ($ligne <=20) {

//deuxieme boucle

    if($ligne == 0 || $ligne == 20) {
        echo "|";
        $ligne++;
       
    } 

        else {
            echo "&nbsp"."&nbsp";
            $ligne++;
        }
    }    
        echo "<br/>";
        $ligne=0; 
         // variable remise a zero
   
   

  }
  
$ligne=0;

for($ligne=0;$ligne<20;$ligne++) {

    if($ligne==0 or $ligne == 20){

        echo "|";
    }
    else {

        echo "_";
    }
    
}
?>









