<?php

require_once('database.php');

//Creo la query SQL
 $query="SELECT * FROM contact  WHERE 1";

     //intergorazione al db
     $check = $db->prepare($query);
     $check->bindParam(':email', $email, PDO::PARAM_STR);
     $check->execute();
 
     //prendo il risultato
     $array = $check->fetchAll(PDO::FETCH_ASSOC);

     echo json_encode($array);
     exit
?>