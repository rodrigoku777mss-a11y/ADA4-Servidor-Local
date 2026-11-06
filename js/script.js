document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.querySelector("#form-contacto");
    const mensajeEstado = document.querySelector("#mensaje-estado");

    if (!formulario) return;

    formulario.addEventListener("submit", (event) => {
        

        const nombre = document.querySelector("#nombre");
        const correo = document.querySelector("#correo");
        const navegador = document.querySelector("#navegador");
        const experiencia = document.querySelector("#experiencia");

        let esValido = true;
        let errores = [];

        // Validar Nombre (minimo 3 caracteres)
        if (nombre.value.trim().length < 3){
            esValido = false;
            errores.push("El nombre debe contener al menos 3 caracteres.");
        }

        // Validar Correo con expresion regular
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regexEmail.test(correo.value.trim())) {
            esValido = false;
            errores.push("Por favor, enviar un correo electronico valido (ej. ejemplo@dominio.com");
        }

        // Validar que se seleccione al menos un navegador
        if (navegador.value ==="") {
            esValido = false;
            errores.push("Debes seleccionar al menos un navegador preferido.")
        }

        // Años de experiencia (Numero entre 0 y 50)
        const expValor = parseInt(experiencia.value, 10);
        if (isNaN(expValor) || expValor < 0 ||expValor > 50 ) {
            esValido = false;
            errores.push("Los Valores deben ser entre 0 y 50");
        }

        //Mostrar retro
        mensajeEstado.style.display = "block";

        if(esValido) {
            mensajeEstado.style.backgroundColor = "#c3e6cb";
            mensajeEstado.style.color = "#155724";
            mensajeEstado.style.padding = "12px";
            mensajeEstado.style.borderRadius = "8px";
            mensajeEstado.innerHTML = "<strong>¡Registro Exitoso!</strong>";

            formulario.reset();
        } else {
            mensajeEstado.style.backgroundColor = "#f8d7da";
            mensajeEstado.style.color = "#721c24";
            mensajeEstado.style.padding = "12px";
            mensajeEstado.style.borderRadius = "8px";
            mensajeEstado.innerHTML = `<strong>Se encontraron los siguientes errores:</strong><ul style="margin-top: 8px; padding-left: 20px;">${errores.map(e => `<li>${e}</li>`).join('')}</ul>`;
        }

    });
});