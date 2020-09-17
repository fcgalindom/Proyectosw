var formulario = document.getElementById('formulario')
console.log(formulario)

formulario.addEventListener('submit',function(e){
   e.preventDefault()
   console.log('presiono el boton')
}) 