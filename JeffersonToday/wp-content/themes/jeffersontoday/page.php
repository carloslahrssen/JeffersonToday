<?php
    get_header();
?>
<?php
    if ( have_posts() ) :
          while(have_posts()) : the_post();?>
            <div class="card-page">
                <div class="card-container-page">
                    <article class="post">
                        <h1><?php the_title();?></h1>
                        <p>
                            <?php the_post_thumbnail('banner-image'); ?>
                            <?php the_content(); ?>
                        </p>
                    </article>
                </div>
            </div>

<?php
        endwhile;
        endif;
?>
<?php
    get_footer();
?>
