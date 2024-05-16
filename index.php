<?php

$bdd = new PDO('mysql:host=localhost;dbname=evaluation_diagnostique', 'root', '');

if (isset($_POST["formulaire_inscription"])) {
    echo "ok";
}
?>

<!-- Page d'inscription -->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>

<body>
    <form>
        <H1>INSCRIPTION</H1>
        <div class="inputs">
            <input type="text" placeholder="Saisissez votre pseudo" name="pseudo">
            <input type="email" placeholder="Saisissez votre e-mail" name="mail1">
            <input type="email" placeholder="Confirmez votre e-mail" name="mail2">
            <input type="password" placeholder="Saisissez votre mot de passe" name="mdp">
        </div>
        <div align="center">
            <button type="submit" name="formulaire_inscription">JE M'INSCRIS</button>
        </div>
    </form>
</body>

</html>