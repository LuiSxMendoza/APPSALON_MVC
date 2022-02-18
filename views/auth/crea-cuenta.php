<div class="registrar">
    <div class="registrar__texto">
        <h1 class="registrar__heading">Crear Cuenta</h1>
        <p class="registrar__descripcion">
            Llena el siguiente formulario para crear una cuenta
        </p>
    </div>

    <?php
        include_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form action="/registrar" class="formulario" method="POST">
        <div class="formulario__campo">
            <label for="nombre">Nombre</label>
            <input 
                type="text"
                id="nombre"
                name="nombre"
                placeholder="Ingresa tu nombre"
                value="<?php echo s($usuario->nombre) ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="apellidos">Apellidos</label>
            <input 
                type="text"
                id="apellidos"
                name="apellidos"
                placeholder="Ingresa tus apellidos"
                value="<?php echo s($usuario->apellidos) ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="telefono">Teléfono</label>
            <input 
                type="tel"
                id="telefono"
                name="telefono"
                placeholder="Ingresa tu teléfono"
                value="<?php echo s($usuario->telefono) ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="email">E-mail</label>
            <input 
                type="email"
                id="email"
                placeholder="Ingresa tu E-mail"
                name="email"
                value="<?php echo s($usuario->email) ?>"
            >
        </div>
        
        <div class="formulario__campo">
            <label for="password">Password</label>
            <input 
                type="password"
                id="password"
                placeholder="Crea tu Password"
                name="password"
            >
        </div>

        <input type="submit" class="formulario__boton" value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a href="/" class="acciones__enlace">¿Ya tienes cuenta? Inicia sesion</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>

</div>