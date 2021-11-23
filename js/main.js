jQuery(document).on('submit', '#formlg', function(event) {
    event.preventDefault();

    jQuery.ajax({
            url: 'User/login.php',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function() {
                $('.botonlg').val('Validando...');
            }
        })
        .done(function(respuesta) {
            console.log(respuesta);
            if (!respuesta.error) {
                if (respuesta.tipo == 'Admin') {
                    location.href = 'User/Admin/admin.php';
                } else if (respuesta.tipo == 'Usuario') {
                    location.href = 'User/Usuario/usuario.php';
                }
            } else {
                $('.error').slideDown('slow');
                setTimeout(function() {
                    $('.error').slideUp('slow');
                }, 3000);
                $('.botonlg').val('Iniciar Sesión');
            }
        })
        .fail(function(resp) {
            console.log(resp.responseText);
        })
        .always(function() {
            console.log("completado");
        });

});

const form_contact = document.getElementById('formlg');
const inputs_new = document.querySelectorAll('#formlg input');

const expresiones_new = {
    nombre_new: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password_new: /^.{4,12}$/, // 4 a 12 digitos.
}

const validarFormContact = (e) => {
    switch (e.target.name) {
        case "nombre_new":
            if (expresiones_new.nombre_new.test(e.target.value)) {
                document.getElementById(`grupo__nombre_new`).classList.remove('formularioNew__grupo-incorrecto');
                document.getElementById(`grupo__nombre_new`).classList.add('formularioNew__grupo-correcto');
                document.querySelector(`#grupo__nombre_new i`).classList.add('fa-check-circle');
                document.querySelector(`#grupo__nombre_new i`).classList.remove('fa-times-circle');
                document.querySelector(`#grupo__nombre_new .formularioNew__input-error`).classList.remove('formularioNew__input-error-activo');
            } else {
                document.getElementById(`grupo__nombre_new`).classList.add('formularioNew__grupo-incorrecto');
                document.getElementById(`grupo__nombre_new`).classList.remove('formularioNew__grupo-correcto');
                document.querySelector(`#grupo__nombre_new i`).classList.add('fa-times-circle');
                document.querySelector(`#grupo__nombre_new i`).classList.remove('fa-check-circle');
                document.querySelector(`#grupo__nombre_new .formularioNew__input-error`).classList.add('formularioNew__input-error-activo');
            }
            break;
    }
}

inputs_new.forEach((input) => {
    input.addEventListener('keyup', validarFormContact);
    input.addEventListener('blur', validarFormContact);
});