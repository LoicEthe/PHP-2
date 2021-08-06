<?php

$title="C'est moi que voila !";
$description=<<<JS
BLABLABLABLABLA DLA POOKIE.BLABLABLABLABLA DLA POOKIEBLABLABLABLABLA DLA POOKIE.
JS;

function getPDO():PDO
{
    static $dbh = "";
    if(!$dbh instanceof PDO){
        $dbh = new PDO(
            "mysql:host=localhost;dbname=test;charset=UTF8",
            "root",
            "",
            [
                PDO :: ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION
            ]
        );
        echo "J'instancie un PDO";
    }
    return $dbh;
}

$dbh = getPDO();

/*
$id=1;

$req = $dbh->prepare("SELECT * FROM sujet WHERE id = :id");
$req->bindValue(":id",$id);
$req->execute();
$result = $req->fetch();


// TRANSACTION
if (!empty($result)){
    try{
        $dbh->beginTransaction(); //COMMENCE LA TRANSACTION
    
        $sth = $dbh->prepare("UPDATE sujet SET title = :title, 
                                                description = :description,
                                                id_user = :id_user
                                                WHERE id = :id");
        
        $sth->bindValue(":id",1);
        $sth->bindValue(":title",$title);
        $sth->bindValue(":description",$description);
        $sth->bindValue(":id_user",1);
    
        $sth->execute(); // EXECUTE LA TRANSACTION
    
        $dbh->commit(); // VALIDE
    
    
    } catch(\Throwable $e){
        echo $e-> getMessage(); 
        $dbh->rollback(); // SI ERREUR, ON ANNULE TOUT
    }
}   else{
    echo "Cet ID n'existe pas";
}

/*function foo(){
    static $bar = 0 ;
    return ++$bar;
}
echo foo();
echo foo();*/



?>


<!-- AFFICHER DONNES BDD DANS HTML -->
    <div>
     <?php
       /* foreach($raws as $v): ?>   <!--raws correponds au tableau de la bdd, relié au fetch-->
           <h1><?=$v['title']?></h1> <!-- le ['title'] > correspond au champs title de la bdd -->
           <p><?=$v['description']?></p>
           <i><?= $v['date_creation']?></i>
        <?php endforeach ?>
    </div>
</body>
</html> */