/*Metodo per il controllo Form */

var idName = "inputName"
var idNum = "inputNum"
var idCity = "inputCity"
var idPreference = "inputPreference"


function validate() {

    var idName = "inputName"
    var idNum = "inputNum"
    var idCity = "inputCity"
    var idPreference = "inputPreference"

    var name = $(inputName).val();
    var num = $(inputNum).val();
    var city = $(inputCity).val();
    var preference = $(inputPreference).val();

    /*Varibili di controlli*/
    var errorMsg = ""
    var error = false
    var regexNum = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;


    //**Controllo Nome**/
    if (name != "" && name !== undefined) {
        if (name.length <= 20) {
            ViewSucces(idName)

        } else {
            error = true
            errorMsg = "Nome troppo lungo!"
            ViewError(idName)


        }
    } else {
        error = true
        errorMsg = "Compila tutti i campi"
        ViewError(idName)
    }


    //**Controllo Numero di Telefono**/
    if (num != "" && num !== undefined) {
        if (num.length <= 20) {

            if (regexNum.test(num)) {
                ViewSucces(idNum)
            } else {
                error = true
                errorMsg = "Inserisci un numero valido"
                ViewError(idNum)
            }

        } else {
            error = true
            errorMsg = "Numero troppo lungo!"
            ViewError(idNum)
        }

    } else {
        error = true
        errorMsg = "Compila tutti i campi"
        ViewError(idNum)
    }


    if (error) {
        $("#error").removeClass("hidden")
        $("#error").text(errorMsg)


    } else {
        $("#error").addClass("hidden")
        console.log("Submit")
        sendData()
    }

}


function ViewError(id) {
    $("#" + id).addClass("form-error")
}

function ViewSucces(id) {
    $("#" + id).removeClass("form-error")
}


function sendData() {

    var name = $(inputName).val();
    var num = $(inputNum).val();
    var city = $(inputCity).val();
    var preference = $(inputPreference).val();


    //chiamata ajax
    $("#loading").removeClass("hidden")
    $("#spinner").removeClass("hidden")
    $.ajax({

        //Tipo di invio
        type: "POST",

        //Link chiamata
        url: "/php/insertContact.php",

        //Dati da inviare
        //data: "&name="+$("#inputName").val()+ "&tel="+$("#inputNum").val()+"&city="+city, non funzionava
        data: {
            name: name,
            tel: num,
            city: city,
            preference: preference,
        },
        cache: false,

        //Gestione successo ed errore
        success: function (data) {
            // alert("eseguita" + data) // messaggio di avvenuta aggiunta valori al db (preso dal file risultato_aggiunta.php) potete impostare anche un alert("Aggiunto, grazie!");
            $("#loading").addClass("hidden")
            $("#spinner").addClass("hidden")

            //console.log("data: "+data)
         
            //Controllo Insert
            if (data) {
                //console.log("Aggiunto")
                window.location.href = "sendSucces.php";
            } else {
                $("#loading").addClass("hidden")
                $("#spinner").addClass("hidden")
                $("#sendError").removeClass("hidden")
                console.log("Error insert db")
            }

        },
        error: function (xhr, status, error) {

            $("#loading").addClass("hidden")
            $("#spinner").addClass("hidden")

            $("#sendError").removeClass("hidden")
            console.log("Error" + xhr);

        },
    });
}