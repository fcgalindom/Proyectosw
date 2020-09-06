function validacionImagen() {
    var validarImagen = document.getElementById('camaraComercio');
    var Ruta = validarImagen.value;
    var archivosP = /(.PDF|.pdf)$/i;
    var arrayDeCadenas = Ruta.split("");
    if (!archivosP.exec(Ruta)) {
        alert('Asegurese que su archivo sea una pdf');
        validarImagen.value = '';
        return false;
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
