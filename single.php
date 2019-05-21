<?php get_header(); ?>

<?php if(have_posts()): ?>　　　
<?php while(have_posts()): ?>
<?php the_post(); ?>




<h1><?php the_title(); ?></h1>

<article>

<?php the_content(); ?>

</article>


<?php endwhile; ?>　
<?php endif; ?>
<?php wp_reset_postdata(); ?>



<?php get_footer(); ?>