$("#updateTable").click(function(){

  location.reload(); 
  
  });
  
  
  $( document ).ready(function() {
  
      var $table = $("#myTable2");
  
      $.getJSON("/php/update.php", function(result){
      //ciclo il file json
        $.each(result, function(i, value){
          //create the row
          var $row = $("<tr/>");
          var $td =  $("<td/>").attr('onClick', 'copyClipboard(this);');
          
          //create the id column
          $("<th/>").text(i+1).appendTo($row);
  
          //create name column
          $td.text(value.name).appendTo($row);
          $td =  $("<td/>").attr('onClick', 'copyClipboard(this);');
          //create telefon column
          $td.text(value.tel).appendTo($row);
          $td =  $("<td/>").attr('onClick', 'copyClipboard(this);');
          //create city column
          $td.text(value.city).appendTo($row);
          $td =  $("<td/>").attr('onClick', 'copyClipboard(this);');
          //create preference column
          $td.text(value.preference).appendTo($row);
          $td =  $("<td/>").attr('onClick', 'copyClipboard(this);');
          //create preference column
          $td.text(value.dateRegister).appendTo($row);
          $td =  $("<td/>").attr('onClick', 'copyClipboard(this);');
  
          //Append the row in the table
          $table.append($row);
         
        });
         
  
      });
  
  
     
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  
    $("#inputSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable2 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  
  
  
      copyAlert(false)
  
  });
  
  
  
  //**ALERT**/
  
  
  
  function copyAlert(status){
      if(status){
          $("#copyAlert").removeClass("hidden")
      }else{
          $("#copyAlert").addClass("hidden")
      }
  }
  
  function copyClipboard(x){
      var copyText = x.innerText;
  
      var tempInput = document.createElement("input");
      tempInput.value = copyText;
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand("copy");
      document.body.removeChild(tempInput);
     
      $("#msgAlertCopy").text("")
      $("#msgAlertCopy").append("<strong>Copiato! </strong>"+copyText)
     
      copyAlert(true)
  
  }
  
  