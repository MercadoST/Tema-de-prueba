<?php get_header(); ?>

    <!-- contenido menu-->
    <div class="container my-5 ">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="text-start w-75 ">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; endif; ?> 
    <!-- fin contenido menu-->

<?php get_footer(); ?> 