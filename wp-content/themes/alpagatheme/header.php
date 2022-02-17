<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header class="myheader py-2">

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="http://localhost/alpagaland/">
                <img class="img-fluid logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                     alt="logo"/>
                <div class="d-flex flex-column">
                    <div class="logoText"><span class="">Alpaga</span><span class="">Land</span></div>
                </div>
            </a>
            <button class="navbar-toggler me-sm-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main',
                        'container' => 'ul',
                        'menu_class' => 'navbar-nav',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link'
                    )
                );
                ?>
            </div>
        </div>
    </nav>

</header>