formulario = document.getElementById('formulario')

formulario.addEventListener('submit',function(e){
   e.preventDefault()

   var datos = new FormData(formulario)

   fetch('../../controlador/auth.php',{
       method: 'POST',
       body: datos
    }).then(res => res.json())
    .then(data => {
        if(data == 'validacion correcta')
        {
            
        }
    })
})