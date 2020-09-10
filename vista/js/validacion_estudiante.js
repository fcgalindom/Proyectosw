formulario = document.getElementById('formulario');

formulario.addEventListener('submit',function(e){
   e.preventDefault()
   console.log('presiono el boton')

   var datos = new FormData(formulario)

   fetch('../../controlador/registro.php',{
       method: 'POST',
       body: datos
   }).then(res => res.json())
   .then(data => {
       console.log(data)
   })
})