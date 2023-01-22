
$(document).ready(function(){
  $("#button1").click(function(){
      $('.firstPage').toggle("slide");
      /*make animation for sliding up here*/
      document.body.style.backgroundColor = "#E6DBC0";
      $('.mainPage').toggle("slide");
  });
});


function recipesIng(){
    
  var data = $('#form').serialize()
  $.ajax({
      type: "POST",
      url: "api.php",
      dataType: "html",
      data: data,
      success: function( result ) {
         /* console.log(result)*/
        $( "#msg" ).html( "<strong>" + result + "</strong>" );
      }
    });

  return false;
}