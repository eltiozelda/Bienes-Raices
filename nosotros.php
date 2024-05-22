<?php

    require 'includes/app.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>
                    Do incididunt fugiat proident nulla. Lorem ad adipisicing sint veniam cillum. Labore cillum dolor veniam id officia cupidatat est velit nisi voluptate consequat labore amet sit. Aliqua cillum proident excepteur ut dolor. Reprehenderit laboris irure quis incididunt ea do. Quis cillum fugiat quis pariatur voluptate dolor laborum esse ex in. Sunt officia culpa culpa quis adipisicing amet fugiat aliqua fugiat culpa.
                </p>

                <p>
                    Deserunt eiusmod elit minim dolor. Commodo tempor anim adipisicing sunt ad occaecat ea qui laboris ullamco veniam aute reprehenderit. Sunt in incididunt do mollit laboris reprehenderit ut cillum proident et eu eiusmod in tempor. Mollit in cillum velit proident magna ut in aliqua laborum ex labore sunt.
                </p>
            </div>
        </div>
    </main>
    
    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Ullamco eu ea ullamco velit. Labore occaecat proident nulla est consequat magna culpa adipisicing consectetur magna non exercitation sint anim. Voluptate non labore non quis labore sunt. Excepteur reprehenderit enim consequat consectetur veniam amet commodo. Nostrud commodo deserunt quis esse officia sint ex duis quis ut duis magna Lorem ad. Fugiat cillum nulla ex sint magna consectetur elit anim enim.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Ullamco eu ea ullamco velit. Labore occaecat proident nulla est consequat magna culpa adipisicing consectetur magna non exercitation sint anim. Voluptate non labore non quis labore sunt. Excepteur reprehenderit enim consequat consectetur veniam amet commodo. Nostrud commodo deserunt quis esse officia sint ex duis quis ut duis magna Lorem ad. Fugiat cillum nulla ex sint magna consectetur elit anim enim.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Ullamco eu ea ullamco velit. Labore occaecat proident nulla est consequat magna culpa adipisicing consectetur magna non exercitation sint anim. Voluptate non labore non quis labore sunt. Excepteur reprehenderit enim consequat consectetur veniam amet commodo. Nostrud commodo deserunt quis esse officia sint ex duis quis ut duis magna Lorem ad. Fugiat cillum nulla ex sint magna consectetur elit anim enim.</p>
            </div>
        </div>
    </section>

    <?php
    incluirTemplate('footer');
?>