<?php get_header(); ?>

<div class="k-event">
<div class="container">
<?php $args = array(
      'numberposts' => 3,                //表示（取得）する記事の数
      'post_type' => 'event'    //投稿タイプの指定
    );
    $posts = get_posts($args);
    if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>


<div class="event__box">
			<a href="<?php the_permalink(); ?>"><img src="<?php echo $img_url; ?>/white.jpg" alt=""></a>
			<div class="event__box--ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		</div>
       

		<?php
      endforeach;
      endif;
      wp_reset_postdata(); ?>
</div>
</div>

<?php get_footer(); ?>