<?php

$informacion = get_field('informacion');
$imagen = get_field('imagen');

?>

<section class="info-general-single">

    <div class="container">

        <div class="info">

            <?php if($informacion['label']): ?>

                <span class="label">
                    <?= $informacion['label']; ?>
                </span>

            <?php endif; ?>

            <?php if($informacion['titulo']): ?>

                <h2>
                    <?= $informacion['titulo']; ?>
                </h2>

            <?php endif; ?>

            <?php if($informacion['descripcion']): ?>

                <div class="description">
                    <?= $informacion['descripcion']; ?>
                </div>

            <?php endif; ?>

        </div>

        <?php if($imagen): ?>

            <figure class="image">

                <img
                    src="<?= $imagen; ?>"
                    alt="<?= $informacion['titulo']; ?>"
                >

            </figure>

        <?php endif; ?>

    </div>

</section>