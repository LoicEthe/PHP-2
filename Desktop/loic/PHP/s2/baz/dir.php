<?php

// ecrire dans le dossier bar
$file_path = implode(DIRECTORY_SEPARATOR, [__DIR__,'..','foo','bar','']);


$data = ["foo","bar","baz"];

$json = json_encode($data);
// echo file_put_contents($file_path . "my-file.json", $json); // chemin ciblé  + création d'un fichier json + envoie de la var json ou texte desiré

/*
if(is_file($file_path . "my-file.json")){
    $json = file_get_contents($file_path . "my-file.json"); // LIT TOUT DANS LE FICHIER
    $data = json_decode($json);                             // DECODE LE FICHIER JSON
    echo $data[1];                                          // INDEX 1 DU FICHIER
}*/

header("Content-Type: application/json");
echo $json;

// redirection header("Location: /some-url")
// 404 header("HTTP/1.1 404 Not Found");
