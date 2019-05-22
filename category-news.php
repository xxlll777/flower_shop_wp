<?php get_header(); ?>

<div class="k-news">
<div class="container">
<?php if(have_posts()): ?>　　　
<?php while(have_posts()): ?>　
<?php the_post(); ?>


<div class="news__article">
<div class="news__date"><?php the_time('Y/m/j') ?></div>
<div class="news__txt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
</div>


<?php endwhile; ?>　
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>
</div>

<?php get_footer(); ?>
