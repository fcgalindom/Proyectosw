var formulario = document.getElementById('formulario2')
var alertas = document.getElementById('alertas2');

formulario.addEventListener('submit', function(e) {
    e.preventDefault()

    var datos = new FormData(formulario)

<<<<<<< HEAD
    console.log(datos.get('email'))
    console.log(datos.get('password'))

    fetch('../../controlador/validaciones/auth.php', {
            method: 'POST',
            body: datos
        })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data === 'INCOMPLETO') {
                alertas.innerHTML = `
=======
   fetch('../../controlador/auth.php',{
       method: 'POST',
       body: datos
    })
    .then(res => res.json())
    .then(data => {
       if (data === 'INCOMPLETO'){
        alertas.innerHTML = `
>>>>>>> 042f74db9287699f466f66c8d7657eedfd00fca6
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
<<<<<<< HEAD
            } else if (data === 'correcto') {
                alertas.innerHTML = `

         <div class="alert alert-primary" role="alert">
          TODO ESTA PERFECTO PA REDIRIGIR
        </div>
        `
            }
        })
=======
       }else if (data === 'correcto'){

         location.href = "../../controlador/estudiante/Login.php?"+"email="+datos.get('email')+"&password="+datos.get('password')
       }
    })
>>>>>>> 042f74db9287699f466f66c8d7657eedfd00fca6
})