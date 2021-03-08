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


        <!-- FORM -->
        <div class="flex cont">
            <form>
                <div class="form-group">
                    <label>Come ti chiami?</label>
                    <input type="text" class="form-control" id="inputName" maxlength="20">

                    <br>

                    <label>Qual è il tuo numero di telefono?</label>
                    <input type="tel" class="form-control" id="inputNum" maxlength="20">

                    <br>

                    <label> Dove vivi?</label>
                    <input type="text" class="form-control" id="inputCity" maxlength="20">

                    <br>

                    <label>A che ora preferisci essere ricontattata/o?</label>
                    <input type="time" value="13:45" class="form-control" id="inputPreference" maxlength="30">

                    <br>
                    <div class="alert alert-danger hidden" role="alert" id="error">
                        k
                        <br>
                    </div>
                </div>

            </form>

            <!-- Loading Spinner -->
            <div id="loading" class="d-flex justify-content-center text-primary mb-3 hidden">
                <div id="spinner" class="spinner-border hidden" role="status">
                    <span class="sr-only">Loading...</span>
                    <br>
                </div>
            </div>
            <!-- ***Loading Spinner*** -->

            <button class="btn btn-my mx-auto pl-5 pr-5" onclick="validate()">Invia</button>
        </div>
        <!-- ***FORM ***-->

        <!-- Error -->
        <br>
        <div id="sendError" class="alert alert-danger hidden" role="alert">
            <h4 class="alert-heading">Ops qualcosa è andato storto</h4>
            <p></p>
            <hr>
            <p class="mb-0">Riprovare!!!</p>
        </div>
        <!-- ***Error*** -->

        <!-- Social -->
        <div class="social">
            <a href="https://www.instagram.com/centroesteticomonicaevolution">
                <img src="/assets/img/insta.png" alt="Facebook" class="socialImg">
            </a>
            
            <a href="https://www.facebook.com/centroesteticomonika">
                <img src="/assets/img/facebook.png" alt="Facebook" class="socialImg">
            </a>
        </div>
        <!-- **Social** -->
        <br><br><br>
    </div>
    <!-- ***Container*** -->

    <!---Footer-->
    <footer class="bg-light text-center myFooter">
        <!-- Copyright -->
        <div class="text-center p-3 bg-footer">
            © 2021 Copyright: Centro Estetico Monica <br>
            <a class="text-create" href="">Created by Giovanni</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!---Footer-->

    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/app.js?versione=<?php echo time(); ?>"></script>
</body>

</html>