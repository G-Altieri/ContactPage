$("#list").click(function(){


    $.ajax({

        //Tipo di invio
        type: "GET",

        //Link chiamata
        url: "/php/getDB.php",


        data: {
    
        },
        dataType:"HTML",

        //Gestione successo ed errore
        success: function (data) {

         console.log(data);


        },
        error: function (xhr, status, error) {

            console.log("Error" + xhr);

        },
    });


});