<?php

    require_once('database.php');

    $nome = "Stefano";

    $query="INSERT INTO prova(`name`)
            VALUES (:nome)";



    //Interogo il db
    $check = $db->prepare($query);
    $check->bindParam(':nome', $nome, PDO::PARAM_STR);

    $check->execute();

    //Controllo se e stato aggiunto corretamente il nuovo record
    if ($check->rowCount() > 0) {
    echo("Aggiunto");
    } else {
    echo("Non Aggiunto");
    }

?>