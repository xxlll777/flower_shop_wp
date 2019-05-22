<?php get_header(); ?>

<div class="k-blog">
<div class="container">
<div class="flexbox">

<?php $args = array(
      'numberposts' => 4,                //表示（取得）する記事の数
      'post_type' => 'blog'    //投稿タイプの指定
    );
    $posts = get_posts($args);
    if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>


<div class="blog__box">
      <a href="<?php the_permalink(); ?>">
        <div class="blog__img">
          <img src="<?php echo CFS()->get( 'blog-image' );?>" alt=""></a>
      <div class="blog__box--ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    </div>
       </div>

    <?php
      endforeach;
      endif;
      wp_reset_postdata(); ?>
      </div>
</div>
</div>

<?php get_footer(); ?>