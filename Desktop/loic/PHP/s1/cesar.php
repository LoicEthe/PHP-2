<?php
/* CRYPTAGE ROMAIN */ 

function encoder(string $str, int $key): string {
   
    $mot_crypte ="";
    $tab_clair = $tab_crypte =  range("A","Z"); 
    
    for($i = 0; $i < $key; $i++){
        array_push($tab_crypte, array_shift($tab_crypte)); //on prend A et B et on les met a la fin du tableau. Il commence donc par C
    }
    
    foreach(str_split($str) as $value){
        $i = array_search($value,$tab_clair);
        $mot_crypte .= $tab_crypte[$i];
    }
    return $mot_crypte;
}


$decalage = 3;
$mot_clair = "CONSTANTINOPLE";
echo encoder($mot_clair,$decalage);
echo '<br>';
$decalage = 7;
$mot_clair = "EXEMPLE";
echo encoder($mot_clair,$decalage);
echo '<br>';
$decalage = 10;
$mot_clair = "OUI";
echo encoder($mot_clair,$decalage);













