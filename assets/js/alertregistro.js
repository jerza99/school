document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.form-content').addEventListener('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(event.target);

        fetch(base_url + 'usuario/register', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error de red: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                Swal.fire({
                    title: '¡Éxito!',
                    text: 'El registro fue exitoso. Ahora puedes iniciar sesión.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    window.location.href = base_url + 'view/index';
                });
            } else {
                Swal.fire({
                    title: 'Error',
                    text: data.message,
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    window.location.href = base_url + 'ruta/a/la/pagina/de/registro';
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                title: 'Error',
                text: 'Hubo un problema al intentar registrarse.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                window.location.href = base_url + 'ruta/a/la/pagina/de/registro';
            });
        });
    });
});
