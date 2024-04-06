<?require './config/parameters.php';?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela</title>

    <!-- links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
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
    </div>
   </body>
   </html>