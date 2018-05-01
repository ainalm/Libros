$(document).ready(function() {

  //post();
  //$("#titHistoria").hide();
  let cloneCount = 1;

  $("#paso1").click(function() {


/*     $("#titHistoria").show();
    $(".ocultaTitulo").hide(); */


    /* 
      var clone = $('#cln').clone();
 clone.find("input").val("");
 clone.find("textarea").val("");
 clone.find("#titulocapitulo").attr('id', 'titulocapitulo'+ cloneCount++);
 clone.find("#contCapitulo").attr('id', 'contCapitulo'+ cloneCount++);
 clone.insertBefore('#ins');
 */
  });

 
});
//FIXME: Envio del form con Ajax
/* function post() {
  var titulohistoria = $("#titulohistoria").val();
  var titulocapitulo = $("#titulocapitulo").val();
  var contCapitulo = $("#contCapitulo").val();
  if (titulohistoria && titulocapitulo && contCapitulo) {
    $.ajax({
      type: "post",
      url: "{{ path('dwes_libros_escribirhistoria') }}",
      data: {
        titulohistoria: titulohistoria,
        titulocapitulo: titulocapitulo,
        contCapitulo: contCapitulo
      },
      success: function(response) {
        alert("enviado correctament");
      }
    });
  }

  return false;
}
 */
$("#crearCuenta").on("click", function(e) {
  //Validate form and submit

  if (
    $("#orangeForm-name").val() == "" ||
    $("#orangeForm-email").val() == "" ||
    $("#orangeForm-pass").val() == ""
  ) {
    e.preventDefault();
    //$('#errormsg').text('Fill in both fields').show();

    $("#orangeForm-name").css("border-bottom", " 1px solid red ");
    $("#labelNombre").css("color", "red ");
    $("#orangeForm-email").css("border-bottom", " 1px solid red ");
    $("#labelEmail").css("color", "red ");
    $("#orangeForm-pass").css("border-bottom", " 1px solid red ");
    $("#labelPassword").css("color", "red ");
  }

  $("#entrar").on("click", function(e) {
    //Validate form and submit

    if ($("#Form-email2").val() == "" || $("#Form-pass2").val() == "") {
      e.preventDefault();
      //$('#errormsg').text('Fill in both fields').show();

      $("#Form-email2").css("border-bottom", " 1px solid red ");
      $("#labelUsername").css("color", "red ");
      $("#Form-pass2").css("border-bottom", " 1px solid red ");
      $("#labelPass").css("color", "red ");
    } else {
      // do nothing and let the form post
    }
  });
});
