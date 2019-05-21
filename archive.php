<?php if(have_posts()): ?>　　　
<?php while(have_posts()): ?>　
<?php the_post(); ?>


<p class="txt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p> ←追加

<?php endwhile; ?>　
<?php endif; ?>
<?php wp_reset_postdata(); ?>