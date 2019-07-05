var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
console.log("hola");
window.onload = function () {
    var form = document.querySelector('#form-login');
    var email = document.querySelector('#email');
    var password = document.querySelector('#password');

    email.onblur = function () {
        if (regexEmail.test(this.value)) {
          console.log("hola");
            this.classList.remove('is-invalid');
        }
    }

    form.onsubmit = function (event) {


        if (!regexEmail.test(email.value)) {
            // email.classList.add('is-invalid');
            var error = document.createElement('span');
            error.innerText = 'Email invalido';
            var div = email.parentElement;
            if (div.children[1]) {
                div.removeChild(div.children[1]);
            }

            div.append(error);
            event.preventDefault();
        }

        if (password.value.trim() == '' || password.value.length < 8) {
            // password.classList.add('is-invalid');
            var error = document.createElement('span');
            error.innerText = 'La contrasenia debe tener minimo 8 caracteres';
            var div = password.parentElement;
            if (div.children[2]) {
                div.removeChild(div.children[2]);
            }
            div.append(error);
            event.preventDefault();

          }


        console.log('se esta enviando');

    }
}
