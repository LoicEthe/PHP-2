<?php

$conf = [
    "dsn" => "mysql:host=localhost;dbname=ccib;charset=UTF8",
    "user" => "root",
    "password" => "",
];
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO(
    $conf["dsn"],
    $conf["user"],
    $conf["password"],
    $options
);
$req = $pdo->prepare("SELECT * FROM user");
$req->execute();
$users = $req->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    $user["pwd"] = password_hash($user["pwd"], PASSWORD_DEFAULT);
    $req = $pdo->prepare("UPDATE user SET pwd = :pwd WHERE id_user = :id_user");
    $req->execute([
        ":pwd" => $user["pwd"],
        ":id_user" => $user["id_user"]
    ]);
}
