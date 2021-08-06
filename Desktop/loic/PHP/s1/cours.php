<?php

/* ASSIGNER UNE NOUVELLE VAR
$foo = "bar";

$$foo = "baz"; // $bar = "baz";

echo $bar; */


//************************** */

/* CONSTANTE
define("BABA","Hello");

echo BABA;*/

/* var_dump AFFICHE LA VALEUR ET LE TYPE. Comme un TypeOf
var_dump($foo); */

//********************* */

/* QUOTE + var
$name = 'John';
$message = "Hello $name";

echo $message; */

//****************************** */

/* TABLEAUX 

$foo = array('baba','dada','lala');
$faa = ['iaia','sasa','rara'];
var_dump($faa); */

/* TABLEAU ASSOCIATIF 
$foo = [
    'foo',
    'bar',
    'baz',
    'red' => '#ff0000',
    'green' => '#00ff00',
    'blue' => '#0000ff'
];*/

/* ACCEDER A UN ELEMENT
echo $foo['1']; */

/* TAILLE TABLEAU
echo count($foo); */

/* SUPPR UN ELEMENT
 shift - supp 1er element
 pop - supp dernier
 splice - efface et remplace
 slice - extrait une portion */

/* AJOUT DANS UN TABLEAU 
unshift - ajoute au début du tableau et renvoie taille
push - ajotue a la fin et renvoie taille
*/

/* CONCATENATION - SYMBOLE . 
$name = "John";
$baba = "Hello " . $name;
echo $baba; */

/* SWITCH 

$foo = "6";

switch($foo){
    case 1 : 
        echo 1;
        break;
    case 6:
    case 7 : 
        echo "6 ou 7";
        break;
    case 10 : 
        echo 10;
        break;
    default:
        echo "default";
}  */

/* MATCH  
$age = 23;

$result = match(true){
    $age >= 65 => "Senior",
    $age >= 25 => "Adult",
    $age >= 18 => "Young Adult",
    default => "kid"
};
var_dump($result);*/


/* FOREACH 
$foo = ["foo","bar","baz"];

foreach($foo as $v){
    echo $v;
}*/



//********************************************** */

// REGEX

/* echo preg_match('/(foo)(bar)/','foobar',$matches);
echo "<br>";
print_r($matches); */


/*
$str = "Foobar";                        // TEXT
echo  preg_match('#[a-zA-Z]#',$str);

$entier = 12345;                        // NUMBER
echo  preg_match('#[0-9]#',$entier);

$flottant = 7.6;                        // FLOTANT
echo  preg_match('#[0-9]\.[0-9]#',$flottant); */ 



//******************************** */
// FICHIERS
/*
$json = json_encode($data) > convertir un tableau ou obj en chaine de car json

$json = json_decode($date) > convertir une chair de car json en tableau ou obj

$serialized = serialize($data) > stocke des données sans perdre la structure ou type

$data = unserialize($serialized) > Recup les valeurs serialisées */

/* creer cookie
$hello = "world";
setcookie('hello', $hello, strtotime('+30 days')); // 1er arg : nom, 2 : valeur 3 : durée
*/
/* creer cookie
echo filter_input(INPUT_COOKIE, "hello");*/

/* supprimer cookie
if (isset($_COOKIE['hello'])){
    unset($_COOKIE['hello']);
    setcookie('hello',null, strtotime('yesterday'));
    echo "Cookie supprimé";
}
else{
    echo "Ce cookie n'existe pas";
}*/

// commencer session 
/*  session_start();
if(!array_key_exists("count",$_SESSION)){
    $_SESSION["count"] = 0;
}

echo ++$_SESSION["count"]; */

// supprimer session
/* session_destroy();
unset($_SESSION);
$params = session_get_cookie_params();
setcookie(
    session_name(),
    null,
    strtotime('yesterday'),
    $params['path'],$params['domain'],
    $params['secure'],$params['httponly']
);

echo isset($_SESSION)? 'yes' : 'no'; */ 

// DATE COOKIE
/*ini_set("session.cookie_lifetime", 3600);

session_start();

$params = session_get_cookie_params();

setcookie(
    session_name(),
    session_id(),
    strtotime("+1 hour"),
    $params["path"],
    $params["domain"],
    $params["secure"],
    $params["httponly"]

); */

//************************** */
/*TRANSACTION
> DEMARRER : beginTransaction()

*/