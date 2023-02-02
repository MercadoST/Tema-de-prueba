<?php get_header(); ?>

<!-- contenido articulo-->
    <div class="container my-5">
        <div class="row">
            <!-- articulo -->
            <div class="col-12 col-md-9 my-5">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( has_post_thumbnail() ){         
                    the_post_thumbnail('post-thumbnail', array( 'class' => 'img-fluid' ));
                } ?>
                <img src="images/card.png" alt="" class="img-fluid">
                <h2 class="my-3"><?php the_title(); ?></h2>
                <p class="lead"><?php echo get_the_date(); ?></p>
                <div class="text-start">
                    <h5><?php the_excerpt(); ?></h5>
                    <p><?php the_content(); ?></p>
                </div>
                <?php endwhile; endif; ?> 
            </div>
            <!-- articulo -->
            <!-- aside-->
            <div class="col-12 col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <!-- fin aside-->
        </div>
    </div>
    <!-- fin contenido articulo-->

<?php get_footer(); ?> 