var formulario = document.getElementById('formulario2')
var alertas = document.getElementById('alertas2');

formulario.addEventListener('submit', function(e) {
    e.preventDefault()

    var datos = new FormData(formulario)

    fetch('../../controlador/validaciones/auth.php', {
            method: 'POST',
            body: datos
        })
        .then(res => res.json())
        .then(data => {
            if (data === 'INCOMPLETO') {
                alertas.innerHTML = `
         <div class="alert alert-danger" role="alert">
          Debe llenar todos los campos.
        </div>
        `
            } else if (data === 'correo mal') {
                alertas.innerHTML = `

         <div class="alert alert-warning" role="alert">
          El correo debe ser el institucional de la universidad El Bosque.
        </div>
        `
            } else if (data === 'correcto') {
                location.href = "../../controlador/estudiante/Login.php?" + "email=" + datos.get('email') + "&password=" + datos.get('password')
            }
        })
})