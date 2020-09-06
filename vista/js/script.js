function validacionImagen() {
    var validarImagen = document.getElementById('camaraComercio');
    var Ruta = validarImagen.value;
    var archivosP = /(.PDF|.pdf)$/i;
    if (!archivosP.exec(Ruta)) {
        alert('Asegurese que su archivo sea una pdf');
        validarImagen.value = '';
        return false;
    }
}
