window.onload = function(){
  var eliminarBotones =  document.querySelectorAll('#delete');
  var form = document.querySelector('#formCart');
  var contenedor = document.querySelector('.contenedor');
  console.log(eliminarBotones);

    for (eliminarBoton of eliminarBotones ) {
    eliminarBoton.onclick = function(){
      //1. capturar que producto es
      var id = this.value;
      var user_id = document.getElementById('user_id').value;
      console.log(id);
      //2. enviar fetch para eliminar de la bd
      fetch('http://localhost:8000/api/carrito/eliminarCarrito/'+id+'/'+user_id)

      .then(function(response){
        return response.json();
      })

      .then(function(data){
        console.log(data);
      )}

      .catch(function(error){
        console.log(error);
      })

      }
    }
}
