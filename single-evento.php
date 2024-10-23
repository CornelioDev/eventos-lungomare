<? get_header() ?>
<?
while (have_posts()) {
    the_post(); ?>
    <div class="carousel w-full ">
        <img class="mx-auto" src="<?= the_field('banner') ?>" />
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 min-h-screen">
        <div class="my-5 md:my-0">
            <div class="text-base text-center font-black my-10 uppercase hidden md:block">
                <h2>Selecciona tu mesa</h2>
            </div>
            <div class="md:grid md:grid-cols-3">
                <div class="text-center capitalize md:hidden">
                    <h1 class="font-bold text-3xl"><?= the_title() ?></h1>
                    <p class="mb-3"><?= the_field('fecha') ?><br><?= the_field('hora') ?></p>
                    <h2 class="text-center font-black mb-3 uppercase">Selecciona tu mesa</h2>
                </div>

                <!-- Desktop Detail -->
                <div class="card card-compact w-96 bg-base-100 col-span-1 hidden md:block">
                    <figure>
                        <img class="rounded-3xl" src="<?= the_post_thumbnail_url() ?>" alt="Shoes" />
                    </figure>
                    <div class="card-body capitalize">
                        <h2 class="card-title text-2xl"><?= the_title() ?></h2>
                        <p class="text-lg"><?= the_field('fecha') ?><br><?= the_field('hora') ?></p>
                        <ul class="text-lg">
                            <?
                            while (have_rows('precios')) : the_row();
                                $zona = get_sub_field('zona');
                                $precio = get_sub_field('precio'); ?>
                                <li><?= $zona ?>: <strong>RD$<?= number_format($precio) ?></strong></li>
                            <? endwhile;  ?>
                        </ul>
                    </div>
                </div>
                <!-- END OF Desktop Detail -->
                <div class="md:col-span-2 block entry-content">
                    <figure class="mb-5">
                        <img src="<?= the_field('mapa_interno') ?>" alt="Mapa interno de mesas del restaurante Lungomare">
                    </figure>
                    <?= the_content() ?>
                </div>
            </div>
        </div>
        <!-- <div class="md:w-4/6 md:mx-auto">
            <h2 class="text-center font-black uppercase md:my-10">Mesas seleccionadas</h2>
            <ul class="text-start divide-y divide-slate-200 py-3 md:py-0 md:my-7">
                <li class="py-4 even:bg-white odd:bg-slate-50 pl-5">
                    <h3 class="font-medium text-base">3 / Mesa regular</h3>
                    <p class="text-sm">Precio: RD$2,300</p>
                </li>
                <li class="py-4 even:bg-white odd:bg-slate-50 pl-5">
                    <h3 class="font-medium text-base">1 / Mesa VIP</h3>
                    <p class="text-sm">Precio: RD$800</p>
                </li>
                <li class="py-4 even:bg-white odd:bg-slate-50 pl-5">
                    <h3 class="font-medium text-base"> 4 / Mesa Alta</h3>
                    <p class="text-sm">Precio: RD$1,800</p>
                </li>
            </ul>
            <div class="text-center">
                <a class="btn btn-primary btn-wide">Siguiente</a>
            </div>
        </div> -->
    </div>
    <!-- END of Content -->
<? } ?>
<? get_footer() ?>