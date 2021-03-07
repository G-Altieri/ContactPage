<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Cache-Control" content="no-cache">


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
    
  

<div id="copyAlert" class="alert alert-info alert-dismissible fade show" role="alert">
    <div id="msgAlertCopy"></div>
  <button type="button" class="close" onClick="copyAlert(false)" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


    <div class="container3">
        <button id="updateTable">Aggiorna</button>
       


 <br>
    <input class="form-control" id="inputSearch" type="text" placeholder="Cerca..">
  <br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Localitá</th>
                    <th scope="col">Preferenza</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody  id="myTable2">
               
            </tbody>
            </table>

    </div>
    <!-- ***Container*** -->
   


    <!-- script 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/appAdmin.js?versione=<?php echo time(); ?>"></script>
</body>

</html>