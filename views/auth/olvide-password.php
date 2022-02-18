<div class="olvide">
    <div class="olvide__texto">
        <h1 class="olvide__heading">Olvide mi Password</h1>
        <p class="olvide__descripcion">
            Reestabece tu password por medio de tu email
        </p>
    </div>

    <?php
        include_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form action="/olvide" class="formulario" method="POST">
        <div class="formulario__campo">
            <label for="email">Email</label>
            <input 
                type="email"
                id="email"
                name="email"
                placeholder="Ingresa tu email"
            >
        </div>

        <input type="submit" class="formulario__boton" value="Enviar">
    </form>

    <div class="acciones">
        <a href="/" class="acciones__enlace">¿Ya tienes cuenta? Inicia sesion</a>
        <a href="/registrar" class="acciones__enlace">¿Aún no tienes cuenta? Crea Una</a>
    </div>

</div>