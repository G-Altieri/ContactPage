<?php

try {
//Varibili per l'accesso al database
    $hostname = "localhost";
    $dbname = "dbh4vfkfle8ymo";
    $user = "uwkme7s1g4eho";
    $pass = "lucazzottifrancesco";

    //Creazione oggetto PDO e connessione al db
    $db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);

//Errore in caso di non connessione
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
    die();
}


?>