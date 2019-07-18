var validarNumero = /^([0-9,])*$/;
var validarLetras = /^[a-zA-Z0-9 ._-]+$/;
var imagen = /.[jpeg|jpg|png]$/;



function validarVacio(input)
{
    if (input.value.trim() == '')
    {
        pintarError(input, 'El campo no puede estar vacio');
        input.value = '';
        return true;
    }
    return false;
}

function pintarError(input, mensaje)
{
    input.classList.add('is-invalid');
    var error = document.createElement('span');
    error.setAttribute('class','invalid-feedback');
    var strong = document.createElement('strong');
    strong.innerText = mensaje;
    var div = elemento.parentElement;
    if (div.children[1])
    {
        div.removeChild(div.children[2]);
    }
    error.append(strong);
    div.append(error);
}

window.onload = function()
{


    var form = document.querySelector('#formCreate');

    form.onsubmit = function(event)
    {

        var elementos = this.elements;
        for (elemento of elementos)
        {

            if (elemento.type == 'submit' || elemento.type == 'hidden')
            {
                continue;
            }
            if (elemento.name == 'name' &&  !validarLetras.test(elemento.value))
            {
                pintarError(elemento, 'El nombre no puede contener simbolos');
                event.preventDefault();
            }
            if (elemento.name == 'stock' &&  !validarNumero.test(elemento.value))
            {
                pintarError(elemento, 'El stock no puede contener simbolos o letras');
                event.preventDefault();
            }

            if (elemento.type != 'file' && validarVacio(elemento))
            {
                event.preventDefault();
            }
            if (elemento.type == 'file' && !imagen.test(elemento.value)){
                pintarError(elemento, 'La extension de la imagen tiene que ser .JPG,.JPEG,.PNG.')
                event.preventDefault();
            }
            if (elemento.name == 'price' &&  !validarNumero.test(elemento.value))
            {
                pintarError(elemento, 'El precio no puede contener simbolos o letras');
                event.preventDefault();
            }

            }
        }
  }
