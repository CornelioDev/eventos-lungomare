<? get_header() ?>

<?
while (have_posts()) {
    the_post(); ?>

    <div class="mt-10 md:mt-16 max-w-80 md:max-w-screen-xl mx-auto page-content min-h-screen">
        <h1 class="text-center mb-24"><?= the_title() ?></h1>
        <?= the_content() ?>
    </div>

<? } ?>

<? get_footer() ?>