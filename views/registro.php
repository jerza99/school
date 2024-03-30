 <?php require '../config/parameters.php';?>
   
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
        <a href="<?=base_url?>view/index">Iniciar sesión</a>
    </div>
