<?php get_header(); ?>

<div class="mt-5 text-center">
    <h1 class="d-5 wpH1">Blog</h1>
</div>
<div class="mb-4">
    <div class="container pb-3 mb-4">
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                 <div class="row  border p-4 shadow-sm m-5 <?php if ($wp_query->current_post % 2 == 0): ?>flex-lg-row-reverse<?php endif ?>">
                    <div class="col-md-7">
                        <h2 style="margin-top: 2rem;" class="blogTitle"><?php the_title(); ?></h2>
                        <p class="lead blogText"><?php the_excerpt(); ?></p>
                        <div class="d-grid gap-2 d-md-flex <?php if ($wp_query->current_post % 2 == 0): ?>justify-content-md-start<?php else: ?>justify-content-md-end<?php endif ?>">
                            <a href="<?php the_permalink(); ?>"
                               class="blogbtn btn px-4 me-md-2 text-uppercase">Lire la suite
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid mx-auto']); ?>
                    </div>
                </div>
        <?php
            }
        }
        ?>

    </div>
</div>
<?php get_footer(); ?>

