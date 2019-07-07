var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,8}$/;


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
        div.removeChild(div.children[1]);
    }
    error.append(strong);
    div.append(error);
}

window.onload = function()
{


    var form = document.querySelector('#formEdit');

    form.onsubmit = function(event)
    {

        var elementos = this.elements;
        for (elemento of elementos)
        {

            if (elemento.type == 'submit' || elemento.type == 'hidden')
            {
                continue;
            }
            if (elemento.name == 'name' &&  regexEmail.test(elemento.value))
            {
                pintarError(elemento, 'El nombre no puede contener simbolos');
                event.preventDefault();
            }
            if (elemento.name == 'stock' &&  regexEmail.test(elemento.value))
            {
                pintarError(elemento, 'El stock no puede contener simbolos');
                event.preventDefault();
            }

            if (elemento.type != 'file' && validarVacio(elemento))
            {
                event.preventDefault();
            }
            if (elemento.name == 'price' &&  regexEmail.test(elemento.value))
            {
                pintarError(elemento, 'Precio Invalido');
                event.preventDefault();
            }

            }
        }
    }
