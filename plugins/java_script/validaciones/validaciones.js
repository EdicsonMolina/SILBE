//Validacion de Select Anidados Pais, Estados, Municipios y Parroquias
  $(document).ready(function()
{
  $( document ).on( "change", "#pais", function(){
        var country = $(this).val();
        $.ajax({
            url : 'estado.php',
            type : 'POST',
            dataType : 'html',
            data: 
                {
                    country : country
                },
            success : function(json) {
                $("#estado").html(json);
            },
            error : function( xhr, status ) {
                console.log('Disculpe, existió un problema en Pais');
            }
        });
    });

    $( document ).on( "change", "#municipio", function(){
        var municipalities = $(this).val();
        $.ajax({
            url : 'parroquia.php',
            type : 'POST',
            dataType : 'html',
            data: 
                {
                    municipalities : municipalities
                },
            success : function(json) {
                $("#parroquia").html(json);
            },
            error : function( xhr, status ) {
                console.log('Disculpe, existió un problema en Municipios');
            }
        });
    });
});




  
function solonumeros(e){
      key = e.keyCode || e.wich;
      teclado = String.fromCharCode(key);
      ced_r = "0123456789";
      tele_mov = "012345678";
      tele_hab = "0123456789";
      tele_trab = "0123456789";
      
      

      especiales = "8-37-38-46";
      teclado_especial = false;

      for(var i in especiales){
        if (key==especiales[i]) {
            teclado_especial=true;
        }
      }

      if (ced_r.indexOf(teclado)==-1 && !teclado_especial){
            return false;
      }
    }

    function sololetras(e){
      key = e.keyCode || e.wich;
      teclado = String.fromCharCode(key).toLowerCase();
      nombre = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
      apellido = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
      pais = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
      edo = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
      mun = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
      parro = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
      pobla = " qwertyuiopasdfghjklñzxcvbnm";
      urbani = " qwertyuiopasdfghjklñzxcvbnm";
      via = " qwertyuiopasdfghjklñzxcvbnm";
      nombre_empre = " qwertyuiopasdfghjklñzxcvbnm";
      profesion = " qwertyuiopasdfghjklñzxcvbnm";
      usuario = "qwertyuiopasdfghjklñzxcvbnm";

      especiales = "8-37-38-46-164";
      teclado_especial = false;

      for(var i in especiales){
        if (key==especiales[i]) {
            teclado_especial=true;break;
        }
      }

      if (nombre.indexOf(teclado)==-1 && !teclado_especial){
            return false;
      }
    }
























function check_buscar(input) {  
  if (input.validity.patternMismatch){  
    input.setCustomValidity("Formato: 12345678 \n Debe contener de 7 a 8 Números");  
  }  
  else {  
    input.setCustomValidity("");  
  }                 
}  







function check_ced_r(input) {  
  if (input.validity.patternMismatch){  
    input.setCustomValidity("Formato: 12345678 \n Debe contener de 7 a 8 Números");  
  }  
  else {  
    input.setCustomValidity("");  
  }                 
}  


function check_nombre(input) {  
  if (input.validity.patternMismatch){  
    input.setCustomValidity("Formato: Nombre \n No se permite una sola letra \n No puede tener espacios al inicio \n No puede tener espacios al final");  
  }  
  else {  
    input.setCustomValidity("");  
  }                 
}  

function check_apellido(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Formato: Apellido \n No se permite una sola letra \n No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_pobla(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}
 

function check_urbani(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_via(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_direc(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_tele_mov(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Formato: 04240000000 \n No se permite un solo numero \n No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_tele_hab(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Formato: 02740000000 \n No se permite un solo numero \n No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_direc_trab(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_tele_trab(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Formato: 02740000000 \n No se permite un solo numero \n No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  
function check_email(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Formato: ejemplo@ejemplo.com \n No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_nombre_empre(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  


function check_profesion(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("No puede tener espacios al inicio \n No puede tener espacios al final");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  















function check_ced_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  



function check_nombre_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_apellido_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  


function check_sexo_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  


function check_edad_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_area_aten_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_progra_apoy_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_pobla_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_urbani_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_via_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_direc_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_ingre_fami_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_tele_mov_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_tele_hab_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_email_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_estatura_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_peso_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_talla_cami_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_talla_pant_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

function check_talla_zapa_e(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  


