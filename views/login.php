
    <div class="form-container" >
        <form class="form-content" action="<?=base_url?>usuario/login" method="post">
            <p class="form-title">Iniciar sesión en su cuenta</p>
            <label class="form-labels" for="">Ingresa tu correo</label>
            <input class="form-inputs" type="email" name="correo" id="correo" required>
            <label class="form-labels" for="">Ingresa tu contraseña</label>
            <input class="form-inputs" type="password" name="contrasena" id="contrasena" required>
            <button class="submit" type="submit">Sign in</button>
        </form>
        <a href="<?=base_url?>view/register">Registarse</a>
    </div>