<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Estetico Monica</title>

    <!-- Icon -->
    <link rel="icon" href="assets/img/icona.png">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css?versione=<?php echo time(); ?>">


</head>

<body>
    <!-- NAVBAR Image and text -->
    <div class="my-nav">
        <nav class="navbar navbar-light navbar-brand bg-light p-3 ">
            <img src="./assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Centro Estetico Monica
        </nav>
    </div>

    <!-- Container -->
    <div class="container">
        <button id="list">Lista Utenti</button>
        <div id="user"></div>

    </div>
    <!-- ***Container*** -->


    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/appAdmin.js?versione=<?php echo time(); ?>"></script>
</body>

</html>