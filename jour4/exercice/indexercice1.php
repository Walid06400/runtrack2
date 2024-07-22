<?php

function presenterPoney($taille, $poids, $robe, $ailes, $herbivore, $prenom) {
    $texte = "Voici $prenom, un magnifique poney volant dans l'eau de robe $robe. ";
    $texte .= "Il mesure $taille cm et pèse $poids kg. ";
 
    if ($ailes) {
        $texte .= "$prenom a des ailes et peut voler dans l'eau ! <br/>";
    } else {
        $texte .= "$prenom n'a pas d'ailes mais des petites nageoire ventrale ! <br/>";
    }
    
    if ($herbivore) {
        $texte .= "Il est herbivore et carnivore à la fois. <br/> ";
    } else {
        $texte .= "Il n'est pas herbivore et préfère les granulés de fées. <br/>";
    }
   
    return $texte;
}


echo presenterPoney(50, 150, "barbe à papa", true, true, "Nourala");
echo presenterPoney(120, 200, "noire", false, true, "Noha");
echo presenterPoney(110, 180, "grise", false, false, "Theo");



?>