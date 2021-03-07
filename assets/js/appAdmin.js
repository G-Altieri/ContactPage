$("#list").click(function(){

/*
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
    });*/

    /*
    $.get("/php/getDB.php", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
      });*/

      $.getJSON("/php/getDB.php", function(result){
          console.log(result);

         /* for(var i=0; i < result.length; i++){
               $("#user").append(result.id + " ");
               $("#user").append(result.name + " ");
               $("#user").append(result.city + " ");

          }*/
        $.each(result, function(i, field){
          $("#user").append('<br>');
          $("#user").append((i+1) + "   ");
          $("#user").append(field.name + "  ");
          $("#user").append(field.tel + "   ");
          $("#user").append(field.city + "  ");
          $("#user").append(field.preference + "    ");
          $("#user").append('<br>');

        });
      });

});