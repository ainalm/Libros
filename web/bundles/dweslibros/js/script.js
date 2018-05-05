$(document).ready(function() {
 

 

  $("#paso1").click(function() {
   

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


/********************************
 * VALIDACIÓN FORMS
 *******************************/
$("#crearCuenta").on("click", function(e) {
  //Valida form Crear Cuenta
  var username= $("#orangeForm-name");
  var labelUsername= $("#labelNombre");

  var email= $("#orangeForm-email");
  var labelEmail= $("#labelEmail");

  var password= $("#orangeForm-pass");
  var labelPass= $("#labelPassword");
  if (
    username.val() == "" || email.val() == "" ||password.val() == "") {
    e.preventDefault();
    $(".valI").css("border-bottom", " 1px solid red ");
    $(".valL").css("color", "red ");
  }

  username.keydown(function(event) {
    validaCampo(username, labelUsername);
  });
  email.keydown(function(event) {
    validaCampo(email, labelEmail);
  });
  password.keydown(function(event) {
    validaCampo(password, labelPass);
  });


});

$("#paso1").on("click", function(e) {
  //Valida form Escribir capitulos
  var titulo= $("#titulohistoria");
  var Ltitulo= $(".Ltitulohistoria");

  var resumen= $("#contact-message");
  var Lresumen= $(".Lcontact-message");
  if (
    titulo.val() == "" || resumen.val() == "") {
    e.preventDefault();
    $(".valI").css("border-bottom", " 1px solid red ");
    $(".valL").css("color", "red ");
  }


  titulo.keydown(function(event) {
    validaCampo(titulo, Ltitulo);
  });

  resumen.keydown(function(event) {
    validaCampo(resumen, Lresumen);
  });

  //Check género seleccionado
  var isChecked = jQuery("input[name=genero]:checked").val();
     if(!isChecked){
      $(".form-check-label").css("color","red");
     }else{
         //alert('You have selected :'+isChecked);
         $(".form-check-label").css("color","black");
     }


});

$("#entrar").on("click", function(e) {
  //Valida form Login

  var email = $("#Form-email2");
  var labelEmail = $("#labelUsername");
  var password = $("#Form-pass2");
  var labelPass = $("#labelPass");

  if (email.val() == "") {
    e.preventDefault();
    $(".valI").css("border-bottom", " 1px solid red ");
    $(".valL").css("color", "red ");
  } else if (password.val() == "") {
    e.preventDefault();
    $(".valI").css("border-bottom", " 1px solid red ");
    $(".valL").css("color", "red ");
  }

  email.keydown(function(event) {
    validaCampo(email, labelEmail);
  });

  
  password.keydown(function(event) {
    validaCampo(password, labelPass);
  });
});

function validaCampo($input, $label) {
  if ($input != "") {
    $input.css("border-bottom", " 1px solid green ");
    $label.css("color", "green ");
  } else {
    $input.css("border-bottom", " 1px solid red ");
    $label.css("color", "red ");
  }
}

/********************************
 * ./ VALIDACIÓN FORMS
 *******************************/