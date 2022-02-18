<div class="cita">
    <div class="cita__texto">
        <h1 class="cita__heading">Nuevo Servicio</h1>
        <p class="cita__descripcion">
            Completa los campos para añadir un nuevo servicio
        </p>
    </div>
</div>

<?php
    include_once __DIR__ . '/../templates/alertas.php'
?>

<a href="/servicios" class="crud-volver">Volver</a>

<div class="barra">
    <p>Hola: <?php echo $nombre ?? ''; ?></p>

    <a href="/logout" class="barra__logout">Cerrar Sesión</a>
</div>

<form action="/servicios/crear" method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>

    <input type="submit" class="boton-crud" value="Crear Sevicio">
</form>