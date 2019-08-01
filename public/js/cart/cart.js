window.onload = function(){
  var eliminarBotones =  document.querySelectorAll('#delete');

  var contenedor = document.querySelector('.contenedor');
  console.log(eliminarBotones);

    for (eliminarBoton of eliminarBotones ) {
    eliminarBoton.onclick = function(){
      var boton = this;
      var form = document.querySelector('#formCart');
      //1. capturar que producto es
      var id = this.value;
      var user_id = document.getElementById('user_id').value;
      console.log(id, user_id);
      //2. enviar fetch para eliminar de la bd
      fetch('http://nisa.dhalumnos.com/api/carrito/eliminarCarrito/'+id+'/'+user_id)

      .then(function(response){
        return response.json();
      })

      .then(function(data){
        var eliminar = boton.parentNode
        eliminar.parentNode.removeChild(eliminar);
        alert("Haga click en el boton actualizar para refrescar el total")
      })

      .catch(function(error){
        console.log(error);
      })

      }
    }
}
