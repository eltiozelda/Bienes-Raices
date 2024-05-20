<?php

    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar sesión</h1>

        <form class="formulario">
            <legend>Email y Passwort</legend>

            <fieldset>
                <legend>Información Personal</legend>

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu E-mail" id="email">

                <label for="password">Password</label>
                <input type="password" placeholder="Tu password" id="password">
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>
    </main>

    <?php
    incluirTemplate('footer');
?>