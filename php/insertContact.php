<?php

//accesso al database
//require_once('database.php');

//varibili utili per l'indirizzamento servo altre pagine
 /*   $contactForm = "Location: /index.php";
    $contactSucces = "Location: /invioEseguito.php";

//Acquisizione dati dal form attraverso il metodo POST
    $nome  = $_POST['name'];
    $tel  = $_POST['tel'];
    $city  = $_POST['city'] ;
   $preference  = $_POST['Preference'] ;
    

    echo("Giovanni");
    echo( "DIO PORCO"+$_POST['name']);
    echo($tel);
    echo($city);*/
//    echo($preference);

    //accesso al database
    require_once('database.php');

    //varibili utili per l'indirizzamento servo altre pagine
    $contactForm = "Location: /index.php";
    $contactSucces = "Location: /invioEseguito.php";

    $data['name'] = $_POST['name'];
    $data['tel'] = $_POST['tel'];
    $data['city'] = $_POST['city'];
    $data['preference'] = $_POST['preference'];

    //Creo la query SQL
    $query="INSERT INTO prova(`name`)
    VALUES (:nome)";


try{
    //Interogo il db
    $check = $db->prepare($query);
    $check->bindParam(':nome', $data['name'], PDO::PARAM_STR);
    //$check->bindParam(':id', $data['tel'], PDO::PARAM_STR);

    $check->execute();
    $data2=true;
}catch(PDOException $e){
    $data2=false;
   // return array("ko", $e -> getMessege());

}

    //Controllo se e stato aggiunto corretamente il nuovo record
   /* if ($check->rowCount() > 0) {
    $data['controllo'] = true;
    } else {
    $data['controllo'] = false;
    }*/

    echo json_encode($data2);
    exit;

?>