<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESO PROHIBIDO</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/warning.css">

</head>

<body>
    <h1>403</h1>
    <div>
        <p>> <span>CÓDIGO DE ERROR</span>:
            ["<i>HTTP 403 Prohibido</i>"]
        </p>
        <p>> <span>DESCRIPCIÓN DEL ERROR</span>: ["<i>No esta oermitido acceder a la consola en esta APP</i>" ...]

        </p>
        <p>> <span>ERROR POSIBLEMENTE CAUSADO POR</span>:
            ["<b>Acceso de ejecución prohibido, acceso de lectura prohibido,
                acceso de escritura prohibido, ssl requerido, ssl 128 requerido, dirección IP rechazada, certificado de
                cliente requerido, acceso al sitio denegado, prohivida la consola, configuración no válida, cambio de
                contraseña, mapeador denegado acceso, certificado de cliente revocado, listado de directorio denegado,
                licencias de acceso de ventana de desarrolladores, el certificado de cliente no es de confianza o no es
                válido,
                el certificado de cliente ha caducado o aún no es válido, el inicio de sesión de pasaporte falló, acceso
                de origen denegado, profundidad infinita denegada, demasiadas solicitudes del misma ip de
                cliente</b>
            " ...]
        </p>
        <p>> <span>QUE TENGA UN BUEN DÍA ...</span></p>
        <p>> <span>VOLDER A LA APLICACIÓN</span>:
            [ <a href="#" id="go_back" style="text-decoration:underline;">Home</a> ]
        </p>
    </div>

    <script src="./js/warnin.js"></script>
    <script>
        const btn = document.getElementById('go_back');

        console.log(btn); // null

        // ✅ Check if element exists before calling addEventListener()
        if (btn) {
            // Not called
            btn.addEventListener('click', () => {
                alert('You clicked the button');
            });
        }
    </script>
</body>

</html>