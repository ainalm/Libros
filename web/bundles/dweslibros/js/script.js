$(document).ready(function() {
  $("#titHistoria").hide(); //Titulo hisotoria se muestra al crear un libro

  $("#paso1muestraCP").click(function() {
    //  Muestra/Oculta Capitulos
    $("#contCapitulos").toggle();
  });


  $("#paso1").click(function() {
    $("#titHistoria").show();
    $(".ocultaTitulo").hide();

    /* 
      let cloneCount = 1;
      var clone = $('#cln').clone();
 clone.find("input").val("");
 clone.find("textarea").val("");
 clone.find("#titulocapitulo").attr('id', 'titulocapitulo'+ cloneCount++);
 clone.find("#contCapitulo").attr('id', 'contCapitulo'+ cloneCount++);
 clone.insertBefore('#ins');
 */
  });
});

$("#crearCuenta").on("click", function(e) {
  //Valida form Crear Cuenta

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
});
$("#entrar").on("click", function(e) {
  //Valida form Login

 var email=$("#Form-email2");
 var labelEmail=$("#labelUsername");
 var password=$("#Form-pass2");
 var labelPass= $("#labelPass");
  if (email.val() == "" || password.val() == "") {
    e.preventDefault();
    //$('#errormsg').text('Fill in both fields').show();
    email.css("border-bottom", " 1px solid red ");
   labelEmail.css("color", "red ");
    password.css("border-bottom", " 1px solid red ");
    labelPass.css("color", "red ");
  } 

  email.keydown(function(event) {
    validaCampo(email, labelEmail);
        
  })

  password.keydown(function(event) {
    validaCampo(password, labelPass);
        
  })


});

function validaCampo($input,$label) {
  if ( $input !="") {
          
    $input.css("border-bottom", " 1px solid green ");
    $label.css("color", "green ");
      }
        else{
          $input.css("border-bottom", " 1px solid red ");
          $label.css("color", "red ");
        }
}