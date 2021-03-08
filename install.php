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
    <div class="container-fluid">
    
  
        <div id="copyAlert" class="alert alert-info alert-dismissible fade show m-0" role="alert">
            <div id="msgAlertCopy"></div>
          <button type="button" class="close" onClick="copyAlert(false)" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

    <!-- Button Ordina-->
    <div class= "row align-items-center g-3 m-3">
    <div class="col-6 d-flex justify-content-center dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Ordina 
      </button>
    <ul id="dropdownMenuList1" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li id="a-z"><a class="dropdown-item" href="#">A-Z</a></li>
        <li id="z-a"><a class="dropdown-item" href="#">Z-A</a></li>
        <li id="dataCrescente"><a class="dropdown-item" href="#">Data Crescente</a></li>
        <li id="dataDecrescente"><a class="dropdown-item" href="#">Data Descresente</a></li>
    </ul>
    </div>

    <!-- Button Aggiorna -->
    <div class="col-6 d-flex justify-content-center">
    <button id="updateTable" type="button" class="mx-auto btn btn-secondary button-aggiorna2">Aggiorna</button>
     </div>
</div>

    <input class="form-control" id="inputSearch" type="text" placeholder="Cerca..">
  <br>

        <table class="table table-striped table-responsive-md">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Località</th>
                    <th scope="col">Preferenza</th>
                    <th scope="col">Ora</th>
                    <th scope="col">Data&emsp;&emsp;&emsp;</th>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/appAdmin.js?versione=<?php echo time(); ?>"></script>
</body>

</html>