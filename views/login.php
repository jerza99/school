<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela</title>
</head>
<body>
    <div class="container">
    <form action="<?=base_url?>usuario/login" method="post">

        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo">

        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena">

        <input type="submit" value="Iniciar sesion">

    </form>
    </div>
</body>
</html>