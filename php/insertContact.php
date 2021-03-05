<?php

//accesso al database
//require_once('database.php');

//varibili utili per l'indirizzamento servo altre pagine
    $contactForm = "Location: /index.php";
    $contactSucces = "Location: /invioEseguito.php";

//Acquisizione dati dal form attraverso il metodo POST
    $nome  = $_POST['nome'] ;
    $tel  = $_POST['tel'] ;
    $city  = $_POST['inputCity'] ;
    $preference  = $_POST['inputPreference'] ;
echo("Giovanni");

echo($nome);
echo($tel);




?>