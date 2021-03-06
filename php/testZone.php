<?php

    require_once('database.php');

    $nome = "Stefano54";
    $id = "423424";

    $query="INSERT INTO prova(`id`,`name`)
            VALUES (:id,:nome)";



    //Interogo il db
    $check = $db->prepare($query);
    $check->bindParam(':nome', $nome, PDO::PARAM_STR);
    $check->bindParam(':id', $id, PDO::PARAM_STR);

    $check->execute();

    //Controllo se e stato aggiunto corretamente il nuovo record
    if ($check->rowCount() > 0) {
    echo("Aggiunto");
    } else {
    echo("Non Aggiunto");
    }

?>