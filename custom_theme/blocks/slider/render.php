
<?php

$slider = get_field('slider');

?>

<?php if($slider): ?>

<section class="carousel-dots">

    <button type="button" class="arrow left3" aria-label="Anterior">

        <svg xmlns="http://www.w3.org/2000/svg"
             width="40"
             height="40"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round">

            <path d="m15 18-6-6 6-6"/>

        </svg>

    </button>

    <div class="slider3">

        <?php foreach($slider as $item): ?>

            <?php if(!empty($item['imagen'])): ?>

                <div class="item">

                    <img
                        src="<?= esc_url($item['imagen']); ?>"
                        alt="Imagen del slider"
                    >

                </div>

            <?php endif; ?>

        <?php endforeach; ?>

    </div>

    <button type="button" class="arrow right3" aria-label="Siguiente">

        <svg xmlns="http://www.w3.org/2000/svg"
             width="40"
             height="40"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round">

            <path d="m9 18 6-6-6-6"/>

        </svg>

    </button>

</section>

<?php endif; ?>