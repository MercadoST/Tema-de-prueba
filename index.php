<?php get_header(); ?>
    <!-- contenido-->
    <div class="container my-5">
        <div class="row">
            <!-- articulo-->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-12 col-sm-6 col-md-4 my-3">
                <div class="card">
                    <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ){         
                        the_post_thumbnail('post-thumbnail', array( 'class' => 'card-img-top img-fluid' ));
                    } ?></a>
                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                    </div>
                    <div class="card-footer text-muted">
                        <small class="muted"><?php echo get_the_date(); ?> / <?php the_category(', '); ?> / <?php the_author(); ?></small>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>         
            <!-- fin articulo-->

        </div>
    </div>
    <!-- fin contenido-->

<?php get_footer(); ?>    