<?php
require '../includes/funciones.php';
incluirTemplate('header');
?>

<main>
    <section class="section contact">
        <h3 class="center-align black-text">Administrador de Ambassadors</h3>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6">
                <a class="waves-effect waves-light btn" href="/admin/ambassadors/crear.php" >Nuevo ambassador</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php

incluirTemplate('footer');
?>