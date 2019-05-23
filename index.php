<?php
$root_url = get_stylesheet_directory_uri() ;
$css_url = $root_url . "/css";
$img_url = $root_url . "/images";
$js_url  = $root_url . "/js";
?>

<?php get_header(); ?>

<main>
	

<div class="main__img"><img src="<?php echo $img_url; ?>/main.jpg" alt=""></div>


<div class="news">
	<div class="container">
		<div class="news__ttl top__ttl">NEWS</div>

<?php query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>  

		<div class="news__article">
		<div class="news__date"><?php the_time('Y/m/j') ?></div>
		<div class="news__txt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
		</div>

	<?php endwhile; ?>
　 <?php endif; ?>
 <?php wp_reset_postdata(); ?> 

	</div>
</div>

<div class="event">
	<div class="container">
		<div class="event__ttl top__ttl">EVENT</div>
		<div class="flexbox">

		<?php $args = array(
      'numberposts' => 3,                //表示（取得）する記事の数
      'post_type' => 'event'    //投稿タイプの指定
    );
    $posts = get_posts($args);
    if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>

		<div class="event__box">
			<a href="<?php the_permalink(); ?>"><img src="<?php echo CFS()->get( 'event-image' );?>" alt=""></a>
			<div class="event__box--ttl"><a href="<?php echo get_post_type_archive_link( 'event' ); ?>"><?php the_title(); ?></a></div>
		</div>

		<?php
      endforeach;
      endif;
      wp_reset_postdata(); ?>

	    </div>
	</div>
</div>

<div class="blog">
	<div class="container">
		
		<div class="blog__ttl top__ttl">BLOG</div>
<div class="flexbox">

<?php $args = array(
      'numberposts' => 4,                //表示（取得）する記事の数
      'post_type' => 'blog'    //投稿タイプの指定
    );
    $posts = get_posts($args);
    if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>


		<div class="blog__box">
			<a href="<?php echo get_post_type_archive_link( 'blog' ); ?>">	
		<div class="blog__img"><img src="<?php
echo CFS()->get( 'blog-image' );?>" alt=""></div>
		<div class="blog__box--date"><?php the_time('Y/m/j') ?></div>
		<div class="blog__box--ttl"><?php the_title(); ?></div>
			</a>
	</div>
	<?php
      endforeach;
      endif;
      wp_reset_postdata(); ?> 


	</div>

	
	
</div>
	</div>


<div class="contact">
		<div class="container">
	<div class="contact__ttl top__ttl">CONTACT</div>
		<div class="flexbox">
		<div class="contact__left"><img src="<?php echo $img_url; ?>/shop.jpg" alt=""></div>
		<div class="contact__right">
			<div class="contact__right--ttl">Flower Shop</div>
			<div class="contact__right--txt">住所：XXXXXXXXX</div>
			<div class="contact__right--txt">電話番号：XXXXXX</div>
			<div class="contact__right--btn"><a href="#">お問い合わせ</a></div>
		</div>
	</div>
</div>
</div>

</main>

<?php get_footer(); ?>