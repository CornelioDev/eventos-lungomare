<? get_header(); ?>

<?
$today = date('Ymd');
$homePageEventos = new WP_Query(array(
    'posts_per_page' => 3,
    'post_type' => 'evento',
    'meta_key' => 'fecha',
    'orderby' => 'meta_value',
    'meta_query' => [
        'key' => 'fecha',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
    ],
    'order' => 'ASC'
));
$homePageSlideshow = new WP_Query(['post_type' => 'slideshow']);
?>

<!-- Home Slider -->
<? if ($homePageSlideshow->have_posts()) {
    $count = 1;
    while ($homePageSlideshow->have_posts()) {
        $homePageSlideshow->the_post() ?>
        <div id="carousel" class="carousel w-full">
            <? while (have_rows('slides')) {
                the_row();
                $image = get_sub_field('image'); ?>
                <div id="slide_<?= $count ?>" class="carousel-item <?= $count === 1 ? 'block' : 'hidden' ?> w-full">
                    <img src="<?= $image ?>" class="mx-auto" />
                </div>
        <? $count++;
            }
        } ?>
        </div>
    <?
} else {
    echo "<p>No hay slides publicados</p>";
}
    ?>
    <!-- END of home slider -->

    <!-- Content -->
    <div class="container mx-auto px-4">
        <div class="w-40 border-b-2 border-black my-4">
            <h1 class="text-3xl font-bold">
                Eventos
            </h1>
        </div>
        <div class="mt-5 md:max-w-screen-xl md:mx-auto space-y-5 md:space-y-0 md:flex md:justify-between">
            <?
            if ($homePageEventos->have_posts()) {
                while ($homePageEventos->have_posts()) {
                    $homePageEventos->the_post();
                    //array_push($eventosBanner, get_field('banner'));
            ?>
                    <div class="card card-compact md:w-96 bg-base-100 shadow-xl capitalize">
                        <figure>
                            <a href="<?= the_permalink(); ?>">
                                <img class="capitalize" src="<?= the_post_thumbnail_url(); ?>" alt="Evento" />
                            </a>
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title text-2xl"><?= the_title(); ?></h2>
                            <p class="text-lg"><?= the_field('fecha'); ?><br>Hora: <?= the_field('hora'); ?></p>
                            <p class="card-actions inline-block mt-2 text-base font-light">
                                <?
                                $precios = get_field('precios');
                                if ($precios) {
                                    $precio_minimo = $precios[0]['precio'];
                                    $precio = number_format($precio_minimo);
                                }
                                ?>
                                Desde: <span class="btn btn-primary btn-sm font-bold">RD$<?= $precio; ?></span>
                            </p>
                        </div>
                    </div>
            <? }
            } else {
                echo "<p>No hay eventos disponibles</p>";
            }
            ?>
        </div>
    </div>
    <!-- END of Content -->

    <? get_footer(); ?>