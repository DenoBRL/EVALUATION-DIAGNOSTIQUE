<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=evaluation_diagnostique", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if (isset($_POST["ok"])) {
    $nom = $_POST["nom"];
    $prénom = $_POST["prénom"];
    $email = $_POST["email"];
    $password = $_POST['password'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :name_user, :surname_user, :email, :password)");
    $requete->execute(array(
        "name_user" => $nom,
        "surname_user" => $prénom,
        "email" => $email,
        "password" => $password
    ));
    header("location: connexion.php");
}
