<?php
      /* Per Il locale
        //$array = [{"id":"4","name":"Giovanni","tel":"+39-327-612-999-3","city":"Lentella :)","preference":"04:20:00","dateRegister":"10:50:46 06\/03\/2021"}];
        $myObj->name = "John";
        $myObj->age = 30;
        $myObj->city = "New York";

        $myJSON = json_encode($myObj);
        echo json_encode($myJSON);
        
        */

/*Non faccio creare cache*/
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.


/*Connessione al db*/
require_once('database.php');

/*Input tipo di richiesta*/
$inputData =  $_GET['nome'];

switch ($inputData) {
    case "default":
         $query="SELECT * FROM contact  ";
        break;
    case "a-z":
         $query="SELECT * FROM contact ORDER BY name ";
        break;
    case "z-a":
        $query="SELECT * FROM contact ORDER BY name DESC ";
        break;
    case "dataCrescente":
        $query="SELECT * FROM contact ORDER BY data ";
      break;
    case "dataDecrescente":
      $query="SELECT * FROM contact ORDER BY data DESC ";
    break;
    }


    //intergorazione al db
    $check = $db->prepare($query);
    $check->execute();

    //prendo il risultato
    $array = $check->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($array);





?>