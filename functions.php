<?php
add_theme_support('post-thumbnails');

//excerpt文字数
function twpp_change_excerpt_length( $length ) {
  return 20; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );



// カスタム投稿タイプ作成
function create_post_type() {
  $exampleSupports = [
    'title',
    'editor',
    'thumbnail',
    'revisions'
  ];


 // add post type
 register_post_type( 'blog',
 array(
   'label' => 'BLOG',
   'public' => true,
   'has_archive' => true,
   'menu_position' => 4,
   'supports' => $exampleSupports
 )
);
}
add_action( 'init', 'create_post_type' );


