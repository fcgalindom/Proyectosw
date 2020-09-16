var formulario = document.getElementById('formulario')
var alertas = document.getElementById('alertas')

formulario.addEventListener('submit',function(e){
   e.preventDefault()
   console.log('presiono el boton')

   var datos = new FormData(formulario)



   fetch('../../controlador/validaciones/registro.php',{
       method: 'POST',
       body: datos
   })
   .then(res => res.json())
   .then(data => {
       console.log(data)
       if (data === 'INCOMPLETO'){
        alertas.innerHTML = `
         <div class="alert alert-danger" role="alert">
          Todos los campos son obligatorios.
        </div>
        `
       }else if (data === 'CONTRASENIAS NO COINCIDEN'){
        alertas.innerHTML = `

         <div class="alert alert-warning" role="alert">
          Las contraseñas no coinciden.
        </div>
        `
       }else if (data === 'correo mal'){
        alertas.innerHTML = `

         <div class="alert alert-warning" role="alert">
          El correo debe ser el institucional de la universidad El Bosque.
        </div>
        `
       }
       else if (data === 'correcto'){


        var ruta = "nombre=" + datos.get('nombre') + "&apellido=" + datos.get('apellido') + "&telefono=" + datos.get('telefono')
        + "&email=" + datos.get('email') + "&direccion=" + datos.get('direccion') + "&carrera=" + datos.get('carrera')
        + "&semestre=" + datos.get('semestre') + "&password=" + datos.get('password')



        location.href = "../../controlador/estudiante/registro.php?"+ruta
       }
   })
})