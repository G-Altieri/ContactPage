
function validate() {
    var idName = "inputName"
    var idNum = "inputNum"
    var idCity = "inputCity"
    var idPreference = "inputPreference"
    
    var name = $(inputName).val();
    var num = $(inputNum).val();
    var city = $(inputCity).val();
    var preference = $(inputPreference).val();
    
    var errorMsg = ""
    var error=false
    

    //**Controllo Nome**/
    if(name != "" && name !== undefined){
        if(name.length <= 20){
            ViewSucces(idName)
        
        }else{
            error = true
            errorMsg = "Nome troppo lungo!"
            ViewError(idName)
       
            
        }
    }else{
        error = true
        errorMsg = "Compila tutti i campi"
        ViewError(idName)
    }
    
    //**Controllo Numero di Telefono**/
    if(num != "" && num !== undefined){
        if(name.length <= 10){
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
        }else{
            error = true
            errorMsg = "Numero troppo lungo!"
            ViewError(idNum)
        }
        
    }else{
        error = true
        errorMsg = "Compila tutti i campi"
        ViewError(idNum)
    }


if(error){
    $("#error").removeClass("hidden")
    $("#error").text(errorMsg)
  
    
}else{
    $("#error").addClass("hidden")
    console.log("Submit")
    window.location.href = "/invioEseguito.php";
}

}


function ViewError(id){
    $("#"+id).addClass("form-error")
}
function ViewSucces(id){
    $("#"+id).removeClass("form-error")
}