$(document).ready(function() {

  $("#contact-message").bind("keyup change", function(e) {
    // do stuff!
    console.log("e");
    $(".contrAlert").hide();
  });

  $("#nuevaPass, #repitePass").keyup(checkPasswordMatch);
});
// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

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

  var isChecked = jQuery("input[name=sexo]:checked").val();

  if (username.val() == "" || email.val() == "" || password.val() == "") {
    e.preventDefault();
    $(".valI").css("border-bottom", " 1px solid red ");
    $(".valL").css("color", "red ");
  }
  if (!isChecked) {
    e.preventDefault();
    $(".form-check-label").css("color", "red");
  } else {
    //alert('You have selected :'+isChecked);
    $(".form-check-label").css("color", "black");
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
  $imagenL=$("#cambL").attr("src");
  $(".imgLibro").attr("src", $imagenL);
//FIXME: No pasar al siguiente TAB 
  var image_name = $('#file-upload').val();
  var extension = $('#file-upload').val().split('.').pop().toLowerCase();  
  if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','']) == -1)  
  {  
       alert('Formato de imagen inválido');  
       $('#file-upload').val('');  
       return false;  
  }else{
    e.preventDefault();
   
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

/* START: Validación cambiar contraseña */

function checkPasswordMatch() {
  var password = $("#nuevaPass").val();
  var confirmPassword = $("#repitePass").val();

  if (password != confirmPassword){
      $("#divCheckPasswordMatch").html("Las contraseñas no coinciden!");
    
    }
  else{
      $("#divCheckPasswordMatch").html("");}
}


/* END: Validación cambiar contraseña */
var tituloC = $("#titulohistoria");
var labeltituloC = $("#labelTitC");
var contC = $("#contact-message");
var labelcontC = $("#labelContC");


contC.keydown(function(event) {
  validaCampo(contC, labelcontC);
});

 
$(".gcapitulo").on("click", function(e) {
  //Valida form CAPITULO

  if (tituloC.val() == "" ||contC.val() == "" ) {
    e.preventDefault();
    $(".valI").css("border-bottom", " 1px solid red ");
    $('.valL').attr('style', 'color: #d65d69 !important');
  }

  tituloC.keydown(function(event) {
    validaCampo(tituloC, labeltituloC);
  });

  contC.keydown(function(event) {
    validaCampo(contC, labelcontC);
  });
});
function validaCampo($input, $label) {
  if ($input != "") {
    console.log($input);
    $input.css("border-bottom", " 1px solid green ");
    $label.css("color", "green ");
  }
   else {
    $input.css("border-bottom", " 1px solid red ");
    $label.css("color", "red ");
  }

}

/********************************
 * ./ VALIDACIÓN FORMS
 *******************************/

 $(".color").on("click",function(e) {
var color =$(this).attr('id');
$("#colorF").val(color)

var elem = document.getElementById('colorSelecc');
  //$("#colorSelecc").addClass(color);
  $('#colorSelecc').removeClass(elem.className.split(' ')[2]).addClass(color);

  var elem = document.getElementById('colorSelecc1');
  $('#colorSelecc1').removeClass(elem.className.split(' ')[2]).addClass(color);
    
 });


 //Cambio el color de la página según el icono seleccionado (CAPITULO)

 $("#sefia").on("click",function(e) {
  console.log($(this).attr('src'));
  $(".container1").css("background-color", "beige");
  $(".container2").css("background-color", "rgb(255, 249, 236)");

  $(".bigtext").css("background-color", "#fff9ec");
  $(".bigtext").css("color", "black");
  $("#heading1").css("background-color", "beige");
  $(".perfil").css("background-color", "#fff9ec");
  

  $(this).attr("src","/Libros/web/bundles/dweslibros/img/icons/sunset-selec.png");
  $("#negra").attr("src","/Libros/web/bundles/dweslibros/img/icons/moon.png");
  $("#blanca").attr("src","/Libros/web/bundles/dweslibros/img/icons/sun.png");

   //Color de fuente
   $("#contact-message").css("color", " black");
   $("#titulohistoria").css("color", " black");
   
 
   $('.cl').attr('style', 'color: #4285f4 !important');
});





$("#blanca").on("click",function(e) {
 
  $(".container1").css("background-color", "#f4f5f6");
  $(".container2").css("background-color", "#fff");

  $(".bigtext").css("background-color", "white");
  $(".bigtext").css("color", "black");
  $("#heading1").css("background-color", "#f2efef");
  $(".perfil").css("background-color", "white");

  
  
  $(this).attr("src","/Libros/web/bundles/dweslibros/img/icons/sun-selec.png");
  $("#sefia").attr("src","/Libros/web/bundles/dweslibros/img/icons/sunset.png");
  $("#negra").attr("src","/Libros/web/bundles/dweslibros/img/icons/moon.png");

  //Color de fuente
  $("#contact-message").css("color", " black");
  $("#titulohistoria").css("color", " black");
  

  $('.cl').attr('style', 'color: #4285f4 !important');
});
  
$("#negra").on("click",function(e) {
  console.log("En negro");
  $(".container1").css("background-color", "rgb(30, 42, 50)");
  $(".container2").css("background-color", "rgb(37, 50, 56)");

  $(this).attr("src","/Libros/web/bundles/dweslibros/img/icons/moon-selec.png");
  $("#sefia").attr("src","/Libros/web/bundles/dweslibros/img/icons/dark-sunset.png");
  $("#blanca").attr("src","/Libros/web/bundles/dweslibros/img/icons/dark-sun.png");
  $("#contact-message").css("color", " #efe8e8");
  $("#titulohistoria").css("color", " #efe8e8");
  $(".bigtext").css("background-color", "#253238");
  $(".bigtext").css("color", "white");
  $(".perfil").css("background-color", "#dfe8e8");
  $("#heading1").css("background-color", "#a6aaab");
  $('.cl').attr('style', 'color: #d65d69 !important');
});

//Cuento los carácteres y palabras introducidas


//Cambio del tamaño fuente (CAPITULO)
//Si el usuairo pulsa + o - , el tamaño aumento/disminuye 2px en cada click
// El tamaño máximo de fuente es 50

function getSize() {
  size = $( ".fuente > *" ).css( "font-size" );
  size = parseInt(size, 10);
 // $( "#font-size" ).text(  size  );
}


//Valor inicial de fontSize
getSize();

$( "#letraUp" ).on( "click", function() {
  // parse font size
  if ((size + 2) <= 50) {
    console.log("+")
    $( ".fuente > *" ).css( "font-size", "+=2" );
  }
});

$( "#letraDown" ).on( "click", function() {
  
  
  if ((size - 2) >= 12) {
    console.log("-")
    $( ".fuente > *" ).css( "font-size", "-=2" );

  
  }

  

});

$( "#updatePerfil" ).on( "click", function() {
//Previsualiza la imagen seleccionada de perfil antes de actualizar el perfil y comprueba que el formato es de una imagen
  var image_name = $('#file-upload').val();
                var extension = $('#file-upload').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','']) == -1)  
                {  
                     alert('Formato de imagen inválido');  
                     $('#file-upload').val('');  
                     return false;  
                }  
});

/* Borro la imágen de portada y pongo una por defecto */
$( ".borrarImg" ).on( "click", function() {
  $("#camb").attr("src","http://www.iconarchive.com/download/i86027/graphicloads/100-flat-2/arrow-upload.ico");

});


$( ".borrarImgL" ).on( "click", function() {

  $("#cambL").attr("src","");

  $(".titPortada").css("display", "initial");
});

//Pone la URL del vídeo 

$(".video").click(function () {
      var theModal = $(this).data("target"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=1&showinfo=0&html5=1&autoplay=1";
      
      $(theModal + ' iframe').attr('src', videoSRCauto);
     
    });

/* Cierra el vídeo */
    $(".cldose").click(function () {
     
      $("#videof").attr('src', "");
      console.log($(".videof").attr('src'));
     
    });


   
/* Guarda la posición del Scroll después de refrescar la página */
function refreshPage () {
  var page_y = document.getElementsByTagName("body")[0].scrollTop;
  window.location.href = window.location.href.split('?')[0] + '?page_y=' + page_y;
}
window.onload = function () {
 
  if ( window.location.href.indexOf('page_y') != -1 ) {
      var match = window.location.href.split('?')[1].split("&")[0].split("=");
      document.getElementsByTagName("body")[0].scrollTop = match[1];
  }
}
    


$(document).ready(function() {

// If scroll AND location cookie is set, and the location is the same

//Hacer scroll a la posición guardada en la cookie scroll.
if ( $.cookie("scroll") !== null && $.cookie("location") !== null 
           && $.cookie("location") == $(location).attr('href')) {
    $(document).scrollTop( $.cookie("scroll") );
}
// Cuando se hace click en el botón...
$('.guardarScroll').on("click", function() {


//Defino una cookie que guarda la posición del scroll
$.cookie("scroll", $(document).scrollTop() );

//Defino una cookie que guarda la posición actual del scroll
$.cookie("location", $(location).attr('href'));
});

});

$('#grabado').on('click', function(){
  $('.gr').html("Grabado");

});
/* Mostrar/ocultar más resultados  */
$( ".azar" ).on( "click", function() {
  //Previsualiza la imagen seleccionada de perfil antes de actualizar el perfil y comprueba que el formato es de una imagen
  location.reload(); 
  });
  
