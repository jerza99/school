<?php require '../config/parameters.php';?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!-- links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
 </head>
 <body>
   
   <div class="form-container">
        <form class="form-content" action="<?=base_url?>usuario/register" method="post" enctype="multipart/form-data">
            <p class="form-title">Registrarse</p>
            <label class="form-labels" for="nombre">Nombre:</label>
            <input class="form-inputs" type="text" name="nombre" id="nombre" required>
            <label class="form-labels" for="apellidos">Apellidos:</label>
            <input class="form-inputs" type="text" name="apellidos" id="apellidos" required>
            <label class="form-labels" for="correo">Correo electrónico:</label>
            <input class="form-inputs" type="email" name="correo" id="correo" required>
            <label class="form-labels" for="contrasena">Contraseña:</label>
            <input class="form-inputs" type="password" name="contrasena" id="contrasena" required>
            <label class="form-labels" for="rol">Rol:</label>
            <select class="form-inputs" name="rol" id="rol" required>
                <option value="">Selecciona un rol</option>
                <option value="alumno">Alumno</option>
                <option value="profesor">Profesor</option>
            </select>
            <!-- <label class="form-labels" for="imagen">Imagen:</label>
            <input class="form-inputs" type="file" name="imagen" id="imagen" accept="image/*"> -->
            <button class="submit" type="submit">Registrarse</button>
        </form>
        <a href="<?=base_url?>usuario/index">Iniciar sesión</a>
    </div>

    <!-- Scripts js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
 </html>