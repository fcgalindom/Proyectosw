
function validacionImagen() {
    var validarImagen = document.getElementById('camaraComercio');
    var Ruta = validarImagen.value;
    var archivosP = /(.PDF|.pdf)$/i;
    var arrayDeCadenas = Ruta.split(" ");
    if (!archivosP.exec(Ruta)) {
        alert('Asegurese que su archivo sea una pdf');
        validarImagen.value = '';
        return false;
    }
    if (archivosP == '') {
        alert('');
    }


    for (var i=0; i < arrayDeCadenas.length; i++) {

        if(arrayDeCadenas[i] == '-' || arrayDeCadenas[i] == '_'  || arrayDeCadenas[i] == '"'  ||
            arrayDeCadenas[i] == '#'  || arrayDeCadenas[i] == '$'  || arrayDeCadenas[i] == '%' || arrayDeCadenas[i] == '&' ||
            arrayDeCadenas[i] == '?' || arrayDeCadenas[i] == '¿' || arrayDeCadenas[i]=='+' ) {

            alert('archivo con caractes especiales modifique su nombre');
            validarImagen.value = '';
            return false;
        }
    }


}
function validacionImagen2() {

    var validarImagen = document.getElementById('logo');
    var Ruta = validarImagen.value;
    var archivosP = /(.png|.PNG|.jpg|.JPG)$/i;
    var arrayDeCadenas = Ruta.split("");
    if (!archivosP.exec(Ruta)) {
        alert('Asegurese que su archivo sea una una imagen se admite png o jng');
        validarImagen.value = '';
        return false;
    }
    if (archivosP == '') {
        alert('');
    }


    for (var i=0; i < arrayDeCadenas.length; i++) {

        if(arrayDeCadenas[i] == '-' || arrayDeCadenas[i] == '_'  || arrayDeCadenas[i] == '"'  ||
            arrayDeCadenas[i] == '#'  || arrayDeCadenas[i] == '$'  || arrayDeCadenas[i] == '%' || arrayDeCadenas[i] == '&' ||
            arrayDeCadenas[i] == '?' || arrayDeCadenas[i] == '¿' || arrayDeCadenas[i]=='+' ) {

            alert('archivo con caractes especiales modifique su nombre');
            validarImagen.value = '';
            return false;
        }
    }

}
var lolz;
var  lolz2;
function onload() { 
    lolz = document.getElementById('confirmarPassword');
    lolz2 = document.getElementById('password');
    
}
function kk(){
        
         
         if(lolz.value == lolz2.value ){
            
            return true;
         }
         else{
            alert('las contraseñas no coinciden');
            return false;
        }
        
    
   
    
  
    
    
}
