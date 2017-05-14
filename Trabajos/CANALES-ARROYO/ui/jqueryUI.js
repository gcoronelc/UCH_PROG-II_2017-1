
    $( function() {
    $( "#datepicker" ).datepicker();

 
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();

  
 
    $( "#selectable" ).selectable();

 

    $( "#resizable" ).resizable();
 

  
    $( "#draggable" ).draggable();
  
 
 
    $( "#menu" ).menu();

 
 
    $( "#accordion" ).accordion();

  } );
   
  

  $( function() {
    $( ".widget input[type=submit], .widget a, .widget button" ).button();
    $( "button, input, a" ).click( function( event ) {
      event.preventDefault();
    } );
  } );

  
  $( function() {
    $( "#tabs" ).tabs();
  } );
 
    $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
        

      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#boton1" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
 