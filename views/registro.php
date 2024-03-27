    
    <div class="form-container" >
        <form class="form-content" action="<?=base_url?>usuario/register" method="post">
            <p class="form-title">Registrarse</p>
            <label class="form-labels" for="">Ingresa tu correo</label>
            <input class="form-inputs" type="email" name="correo" id="correo">
            <label class="form-labels" for="">Ingresa tu contraseña</label>
            <input class="form-inputs" type="password" name="contrasena" id="contrasena">
            <button class="submit" type="submit">Registrarse</button>
        </form>
        <a href="<?=base_url?>view/index">Sign in</a>
    </div>