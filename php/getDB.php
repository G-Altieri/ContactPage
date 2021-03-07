<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
require_once('database.php');

//Creo la query SQL
 $query="SELECT * FROM contact  ";
     //intergorazione al db
     $check = $db->prepare($query);
     $check->bindParam(':email', $email, PDO::PARAM_STR);
     $check->execute();
 
     //prendo il risultato
     $array = $check->fetchAll(PDO::FETCH_ASSOC);

     //$array = [{"id":"4","name":"Giovanni","tel":"+39-327-612-999-3","city":"Lentella :)","preference":"04:20:00","dateRegister":"10:50:46 06\/03\/2021"}];

     /*
        $myObj->name = "John";
        $myObj->age = 30;
        $myObj->city = "New York";

        $myJSON = json_encode($myObj);

        echo $myJSON;*/
     //echo ob_get_clean()
     echo json_encode($array);
  
    
?>