<?php

    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>

        <p>Sunt pariatur labore deserunt ipsum elit est. Laborum ad quis esse laborum commodo in non eu non enim reprehenderit. Labore consectetur Lorem ea irure id exercitation fugiat labore laborum in aliquip. Duis pariatur consequat nulla incididunt nisi magna. Consectetur elit laborum culpa aute commodo anim veniam velit.</p>
        <p>Nulla velit nostrud pariatur officia laborum occaecat culpa sint. Est ex eu tempor dolore minim ullamco commodo ad excepteur esse velit adipisicing sunt. Dolor in et pariatur in officia anim sunt ut esse incididunt cillum deserunt duis nisi. Aute ad aute nisi aliquip est duis. Laboris labore officia sit quis in deserunt sunt consequat veniam dolore. Occaecat labore veniam occaecat fugiat non aute et anim amet. Ex aliqua aliquip quis ea.</p>
    </main>
    <?php
    incluirTemplate('footer');
?>