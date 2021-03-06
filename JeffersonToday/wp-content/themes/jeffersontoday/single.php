<?php
    get_header();
?>
<?php
    if ( have_posts() ) :
          while(have_posts()) : the_post();?>
                <div class="card-page">
                    <div class="card-container-page">
                        <article class="post">
                            <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                            <p class="post-info single-info">
                                <?php the_time('F jS, Y g:i a '); ?> | By <a href=" <?php echo get_author_posts_url(get_the_author_meta('ID')); ?> "><?php the_author(); ?></a> | Posted in
                                <?php
                                    $categories = get_the_category();
                                    $separator = ", ";
                                    $output = '';

                                    if($categories){
                                        foreach($categories as $category){
                                            $output .= '<a href="'. get_category_link($category->term_id) .'">' . $category->cat_name . '</a>'  . $separator;
                                        }
                                        echo trim($output, $separator);
                                    }
                                 ?>
                            </p>
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
