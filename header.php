<!-- Header -->
<!doctype html>
<html data-theme="eventos">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo('name') ?> | <? single_post_title() ?></title>
    <? wp_head() ?>
</head>

<body>
    <div class="navbar bg-neutral-800 text-white">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl" href="<?= site_url() ?>"><?= get_bloginfo('name') ?></a>
        </div>
        <!-- desktop menu -->
        <?
        if (is_user_logged_in()) {
            // Menú para usuarios registrados
            wp_nav_menu([
                'theme_location' => 'header-user-menu',
                'menu_class' => 'menu menu-horizontal px-1 hidden md:flex'
            ]);
        } else {
        ?>
            <div class="menu menu-horizontal px-1 hidden md:flex">
                <ul>
                    <li class="menu-item">
                        <a href="<?= site_url('my-account') ?>">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        <? } ?>

        <!-- mobile menu -->
        <div class="dropdown dropdown-end md:hidden">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <?
            // wp_nav_menu([
            //     'theme_location' => 'header-main-menu',
            //     'menu_class' => 'dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 text-neutral-700'
            // ])
            ?>

            <?
            if (is_user_logged_in()) {
                // Menú para usuarios registrados
                wp_nav_menu([
                    'theme_location' => 'header-user-menu',
                    'menu_class' => 'dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 text-neutral-700'
                ]);
            } else {
            ?>
                <div class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 text-neutral-700">
                    <ul>
                        <li class="menu-item">
                            <a href="http://eventos.test/my-account/">Iniciar Sesión</a>
                        </li>
                    </ul>
                </div>
            <? } ?>
        </div>
    </div>
    <!-- END of header -->