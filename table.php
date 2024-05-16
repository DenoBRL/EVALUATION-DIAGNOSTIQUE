<?php

    $pdo = new PDO('mysql:host=localhost;dbname=evaluation_diagnostique;port=3306','root','', 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
 
    $sql = "CREATE TABLE IF NOT EXISTS `mabasededonnees`.`utilisateurs` (  
        `id` INT NOT NULL AUTO_INCREMENT ,   
        `mdp` VARCHAR(255) NOT NULL ,  
        `email` VARCHAR(255) NOT NULL ,   
        `dateInscription` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
        PRIMARY KEY (`idUtilisateur`)) ENGINE = InnoDB;"; 
  
    $pdo->exec($sql); 
  
    
    echo 'Félicitations, la table a bien été créée !'; 
 
catch (PDOException $e)
  print "Erreur !: " . $e->getMessage() . "<br/>"; 
  die();
  
  ?>