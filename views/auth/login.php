<div class="login">

    <div class="login__texto">
        <h1 class="login__heading">Login</h1>
        <p class="login__descripcion">
            Inicia sesión con tus datos
        </p>
    </div>

    <?php
        include_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form action="/" class="formulario" method="POST">
        <div class="formulario__campo">
            <label for="email">E-mail</label>
            <input 
                type="email"
                id="email"
                placeholder="Tu E-mail"
                name="email"
            >
        </div>

        <div class="formulario__campo">
            <label for="password">Password</label>
            <input 
                type="password"
                id="password"
                placeholder="Tu Password"
                name="password"
            >
        </div>

        <input type="submit" value="Iniciar Sesion" class="formulario__boton">
    </form>

    <div class="acciones">
        <a href="/registrar" class="acciones__enlace">¿Aún no tienes cuenta? Crea Una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</div>