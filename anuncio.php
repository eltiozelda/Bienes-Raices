<?php
    include './includes/templates/header.php';
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio"> $3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
        </div>

        <p>Sunt pariatur labore deserunt ipsum elit est. Laborum ad quis esse laborum commodo in non eu non enim reprehenderit. Labore consectetur Lorem ea irure id exercitation fugiat labore laborum in aliquip. Duis pariatur consequat nulla incididunt nisi magna. Consectetur elit laborum culpa aute commodo anim veniam velit.</p>
        <p>Nulla velit nostrud pariatur officia laborum occaecat culpa sint. Est ex eu tempor dolore minim ullamco commodo ad excepteur esse velit adipisicing sunt. Dolor in et pariatur in officia anim sunt ut esse incididunt cillum deserunt duis nisi. Aute ad aute nisi aliquip est duis. Laboris labore officia sit quis in deserunt sunt consequat veniam dolore. Occaecat labore veniam occaecat fugiat non aute et anim amet. Ex aliqua aliquip quis ea.</p>
    </main>

<?php
    include './includes/templates/footer.php';
?>