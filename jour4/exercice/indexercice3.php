<?php
function coupergateau($gateau, $nombredecoupes) {
    if ($nombredecoupes =2) {
        $gateau += $nombredecoupes +2;
    }
    return "Après $nombredecoupes coupes, le gâteau a $gateau parts.<br/>";
}



echo couperGateau (5,6); 
echo couperGateau (10,5); 
echo couperGateau (10,4); 




?>