<?php get_header(); ?>
    <div id="carouselCaptions" class="carousel slide d-none d-sm-block" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alpaca-full.jpg"
                     class="d-block w-100 img-fluid" alt="bébé alpaca">
                <div class="carousel-caption">
                    <h2 class="fs-2 mb-3">Adoptez votre alpaga !</h2>
                    <p class="fs-5 mb-3 d-none d-md-block">Il n'attend que vous pour prendre soin de lui et vous donner une laine
                        magnifique.</p>
                    <a href="http://localhost/alpagaland/categorie-produit/alpagas/" class="btn btn-outline-light text-uppercase fs-5">En savoir +</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alpaca-wool.jpg"
                     class="d-block w-100 img-fluid" alt="Laine d'alpaga">
                <div class="carousel-caption">
                    <h2 class="fs-2 mb-3">Envie de douceur et de chaleur ?</h2>
                    <p class="fs-5 mb-3 d-none d-md-block">La laine d'alpaga possède de nombreux atouts. Découvrez tout nos produits.</p>
                    <a href="http://localhost/alpagaland/boutique/" class="btn btn-outline-light text-uppercase fs-5">En savoir +</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alpaca-youngs.jpg"
                     class="d-block w-100 img-fluid" alt="jeunes alpagas">
                <div class="carousel-caption">
                    <h2 class="fs-2 mb-3">Prendre soin de son élevage d'alpagas</h2>
                    <p class="fs-5 mb-3 d-none d-md-block">Découvrez toutes les astuces de José pour choyer vos animaux préférés.</p>
                    <a href="http://localhost/alpagaland/blog/elevage-alpagas/"
                       class="btn btn-outline-light text-uppercase fs-5">Lire l'article</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container">
        <div class="pt-5 mt-5">
            <h2 class="text-center text-uppercase frontpageH2">NOS DERNIERS PRODUITS</h2>
            <div class="container mb-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 pt-4 pb-5">
                    <?php

                    $args = array(
                        'posts_per_page' => 6,
                        'post_type' => 'product',
                        'product_cat' => 'accessoires'

                    );

                    $q = new WP_Query($args);

                    if ($q->have_posts()) {

                        while ($q->have_posts()) {
                            $q->the_post();
                            $product = wc_get_product(get_the_ID());
                                ?>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <?php the_post_thumbnail('medium', array('class' => 'card-img-top img-fluid')); ?>
                                        <div class="card-body">
                                            <div class="card-title h4">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="card-text">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <div class="card-text price">
                                                <p class="text-end"><?php echo $product->get_price(); ?> €</p>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <a href="<?php the_permalink(); ?>"
                                                   class="btn btn-sm btn-outline-secondary text-uppercase">
                                                    Voir le produit
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div> Il n'y a pas encore d'articles</div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

            <h2 class="text-center text-uppercase frontpageH2">NOS ALPAGAS DU MOMENT</h2>
            <div class="container mb-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 pt-4 pb-5">
                    <?php

                    $args = array(
                        'posts_per_page' => 6,
                        'post_type' => 'product',
                        'product_cat' => 'alpagas'

                    );

                    $q = new WP_Query($args);

                    if ($q->have_posts()) {

                        while ($q->have_posts()) {
                            $q->the_post();
                            $product = wc_get_product(get_the_ID());
                            ?>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <?php the_post_thumbnail('medium', array('class' => 'card-img-top img-fluid')); ?>
                                    <div class="card-body">
                                        <div class="card-title h4">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="card-text">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <div class="card-text">
                                            <p class="text-end price"><?php echo $product->get_price(); ?> €</p>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="<?php the_permalink(); ?>"
                                               class="btn btn-sm btn-outline-secondary text-uppercase">
                                                Voir l'animal
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div> Il n'y a pas encore d'articles</div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

            <h2 class="text-center text-uppercase frontpageH2">Nos derniers articles</h2>

            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 pt-4 pb-1">
                    <?php
                    $args = array(
                        'posts_per_page' => 3,

                    );

                    $q = new WP_Query($args);

                    if ($q->have_posts()) {
                        while ($q->have_posts()) {
                            $q->the_post();
                            ?>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <?php the_post_thumbnail('medium', array('class' => 'card-img-top img-fluid')); ?>
                                    <div class="card-body">
                                        <div class="card-title h4">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="card-text">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="<?php the_permalink(); ?>"
                                               class="btn btn-sm btn-outline-secondary text-uppercase">
                                                Lire la suite
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div> Il n'y a pas encore d'articles</div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container"><?php the_content(); ?></div>
<div class="text-end me-5 mb-5">
    <a href="#" class="me-5 btn btnUp fs-4"><i class="fa-solid fa-angles-up"></i></a>
</div>

<?php get_footer(); ?>