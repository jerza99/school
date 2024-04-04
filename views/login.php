
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin</title>
    
    <!-- links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="form-container" >
        <form class="form-content" action="<?=base_url?>usuario/login" method="post">
            <p class="form-title">Iniciar sesión en su cuenta</p>
            <label class="form-labels" for="">Ingresa tu correo</label>
            <input class="form-inputs" type="email" name="correo" id="correo" required>
            <label class="form-labels" for="">Ingresa tu contraseña</label>
            <input class="form-inputs" type="password" name="contrasena" id="contrasena" required>
            <button class="submit" type="submit">Sign in</button>
        </form>
        <a href="<?=base_url?>views/registro.php">Registarse</a>
        <!-- <a href="<?=base_url?>usuario/updatePass">Actualizar contraseñas</a> -->
    </div>
</body>
</html>