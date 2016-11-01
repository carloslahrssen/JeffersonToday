<?php
    get_header();
?>
<?php
    if ( have_posts() ) :?>
        <h2 class="subtitle"><?php
                if(is_category()){
                    single_cat_title();
                }
                elseif(is_tag()){
                    single_tag_title();
                }
                elseif(is_author()){
                    the_post();
                    echo 'Author Archives: '. get_the_author();
                }
                elseif (is_day()) {
                    echo 'Daily Archives: ' . get_the_date();
                }
                elseif (is_month()) {
                    echo 'Monthly Archives: ' . get_the_date('F Y');
                }
                elseif (is_year()) {
                    echo 'Yearly Archives: ' . get_the_date('Y');
                }
                else{
                    echo "archives";
                }
         ?></h2>
        <?php
          while(have_posts()) : the_post();?>
          <div class="card">
                <div class="card-container">
                    <article class="post">
                        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                        <p class="post-info">
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
                        <p class="excerpt">
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Read more</a>
                        </p>
                    </article>
                </div><!---card-container-->
          </div><!--card-->


<?php
        endwhile;
        endif;
?>
<?php
    get_footer();
?>
