$(document).ready(function() {
  $("#contact-message").bind("keyup change", function(e) {
    // do stuff!
    console.log("e");
    $(".contrAlert").hide();
  });
});


/********************************
 * VALIDACIÓN FORMS
 *******************************/
$("#crearCuenta").on("click", function(e) {
  //Valida form Crear Cuenta
  var username = $("#orangeForm-name");
  var labelUsername = $("#labelNombre");

  var email = $("#orangeForm-email");
  var labelEmail = $("#labelEmail");

  var password = $("#orangeForm-pass");
  var labelPass = $("#labelPassword");
  if (username.val() == "" || email.val() == "" || password.val() == "") {
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
  var titulo = $("#titulohistoria");

  var resumen = $("#contact-message");
  var Ltitulo = $(".Ltitulohistoria");

  var Lresumen = $(".Lcontact-message");

  var isChecked = jQuery("input[name=genero]:checked").val();
  if (titulo.val() == "" || resumen.val() == "") {
    e.preventDefault();
    $(".valI").css("border-bottom", " 1px solid red ");
    $(".valL").css("color", "red ");
  } else {
  }

  titulo.keydown(function(event) {
    validaCampo(titulo, Ltitulo);
  });

  resumen.keydown(function(event) {
    validaCampo(resumen, Lresumen);
  });

  //Check género seleccionado

  if (!isChecked) {
    $(".form-check-label").css("color", "red");
  } else {
    //alert('You have selected :'+isChecked);
    $(".form-check-label").css("color", "black");
  }

  //Lleva al siguiente tab

  if (titulo.val() !== "" && resumen.val() !== "" && isChecked) {

    $("#ap1").attr("class", "nav-link");
    $("#ap1").attr("aria-selected", "false");
    $("#panel1").attr("class", "tab-pane fade");

    $("#ap2").attr("class", "nav-link active show");
    $("#ap2").attr("aria-selected", "true");
    $("#panel2").attr("class", "tab-pane fade active show");

    //Muestro los datos del libro insertado
    $(".titPortada").text(titulo.val());
    $("#resumen").text(resumen.val());
  }
});

if ($("#contact-message").val() !== "") {
  $(".contrAlert").hide();
}
$("#back").on("click", function(e) {
  $("#ap3").attr("class", "nav-link");
  $("#ap3").attr("aria-selected", "false");
  $("#panel3").attr("class", "tab-pane fade");

  $("#ap1").attr("class", "nav-link active show");
  $("#ap1").attr("aria-selected", "true");
  $("#panel1").attr("class", "tab-pane fade active show");
});

$("#paso2").on("click", function(e) {
  $("#ap2").attr("class", "nav-link");
  $("#ap2").attr("aria-selected", "false");
  $("#panel2").attr("class", "tab-pane fade");

  $("#ap3").attr("class", "nav-link active show");
  $("#ap3").attr("aria-selected", "true");
  $("#panel3").attr("class", "tab-pane fade active show");
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

 $(".color").on("click",function(e) {
var color =$(this).attr('id');

var elem = document.getElementById('colorSelecc');
  //$("#colorSelecc").addClass(color);
  $('#colorSelecc').removeClass(elem.className.split(' ')[2]).addClass(color);

  var elem = document.getElementById('colorSelecc1');
  $('#colorSelecc1').removeClass(elem.className.split(' ')[2]).addClass(color);
    
 });