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
    <link rel="stylesheet" href="./assets/css/style.css">


</head>

<body>
    <!-- NAVBAR Image and text -->
    <nav class="navbar navbar-light navbar-brand bg-light p-3">
        <img src="./assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Centro Estetico Monica
    </nav>
    <!-- FORM -->

    <!-- Container -->
    <div class="container">


        <!-- FORM -->
        <div class="flex cont">
            <form >
                <div class="form-group">
                    <label>Come ti chiami?</label>
                    <input type="text" class="form-control" id="inputName" maxlength="20">

                    <br>

                    <label>Qual è il tuo numero di telefono?</label>
                    <input type="text" class="form-control" id="inputNum"  maxlength="10">

                    <br>

                    <label> Dove vivi?</label>
                    <input type="text" class="form-control" id="inputCity" maxlength="20">

                    <br>

                    <label>A che ora preferisci essere ricontattata/o?</label>
                    <input type="text" class="form-control" id="inputPreference" maxlength="30">

                    <br>
                    <div class="alert alert-danger hidden" role="alert" id="error">
                      k
                        <br>
                    </div>
                </div>
                
            </form>
            <button class="btn btn-my mx-auto" onclick="validate()">Invia</button>
        </div>
        <!-- ***FORM ***-->

    </div>
    <!-- ***Container*** -->

    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>