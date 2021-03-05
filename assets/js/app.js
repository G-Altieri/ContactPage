/*Metodo per il controllo Form */
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
        window.location.href = "./php/insertContact.php";
    }

}


function ViewError(id) {
    $("#" + id).addClass("form-error")
}

function ViewSucces(id) {
    $("#" + id).removeClass("form-error")
    $.post("./php/insertContact.php", { nome: name, tel: num });
}



/* Non li butto
var realNum = parseInt(num, 10)
            if (isNaN(realNum)) {
                error = true
                errorMsg = "Inserisci un numero valido"
                ViewError(idNum)
            }else{
                if (realNum.toString().length == num.length){
                    ViewSucces(idNum)
              
                }else{
                    error = true
                    errorMsg = "Inserisci un numero valido"
                    ViewError(idNum)
                }
            }

*/