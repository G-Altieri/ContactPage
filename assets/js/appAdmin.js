
/*Document is ready*/  
$( document ).ready(function() {
  
  /*Carico la tabella */
  readyTableStandard();


   /*Ricerca In tabella*/
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
  
  //Nascondo l'alert copy
   copyAlert(false)




});//Document is ready


/*Pulsante Aggiorna Page*/
$("#updateTable").click(function(){
location.reload(); 
});

//**Alert Copy + Copy in Clipboard**/
function copyAlert(status){
    if(status){
        $("#copyAlert").removeClass("hidden")
      
    }else{
        $("#copyAlert").addClass("hidden")
    }
}
/*Metodo che copia viene richiamato quando si clicca sulla tabella*/
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



/*Funzione Lettura Standard della tabella*/
function readyTableStandard(){
    $.getJSON({
      url: "/php/update.php",
      data: 'nome=default',
      success: function(data){
        printTable(data);
      }
  });
}



//Operazioni Gestione Bottone Ordina
  
  //A-Z
  $("#a-z").click(function(){

    $.getJSON({
      url: "/php/update.php",
      data: 'nome=a-z',
      success: function(data){
        //alert(data)
        printTable(data);
      }
      
  });

  });// a-z


  //Z-A
 $("#z-a").click(function(){
    $.getJSON({
      url: "/php/update.php",
      data: 'nome=z-a',
      success: function(data){
        //alert(data)
        printTable(data);
      }
  });
  });// z-a


  //dataCrescente
  $("#dataCrescente").click(function(){
    $.getJSON({
      url: "/php/update.php",
      data: 'nome=dataCrescente',
      success: function(data){
        //alert(data)
        printTable(data);
      }
  });
  });// dataCrescente

  //dataDecrescente
  $("#dataDecrescente").click(function(){
    $.getJSON({
      url: "/php/update.php",
      data: 'nome=dataDecrescente',
      success: function(data){
        //alert(data)
        printTable(data);
      }
  });
  });// dataCrescente

//'nome=default',

function printTable(result){

var $table = $("#myTable2");
$table.text("");
    
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
        $td.text(value.time).appendTo($row);
        $td =  $("<td/>").attr('onClick', 'copyClipboard(this);');
        //create preference column
        $td.text(value.data).appendTo($row);
        $td =  $("<td/>").attr('onClick', 'copyClipboard(this);');

        //Append the row in the table
        $table.append($row);
    
      });

}
  

