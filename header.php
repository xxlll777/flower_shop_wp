<?php
$root_url = get_stylesheet_directory_uri() ;
$css_url = $root_url . "/css";
$img_url = $root_url . "/images";
$js_url  = $root_url . "/js";
?>

<!DOCTYPE html>
<html lang="la">
<head>
	<meta charset="UTF-8">
	<title>flower_shop</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
	<link rel="stylesheet" href="<?php echo $css_url; ?>/style.css">

	<?php wp_head(); ?>
</head>
<body>
	

<header>
	<div class="header">

			<div class="header__box">
		<div class="header__left">
			<h2 class="header__ttl"><a class="header__ttl--top" href="<?php echo home_url() ?>">Flower Shop</a></h2>
		</div>
		<nav class="header__right">

			<ul class="header__right--nav">
				<li class="nav--li"><a href="<?php echo get_permalink( get_page_by_path('concept') ); ?>">Concept</a></li>
				<li class="nav--li"><a href="<?php echo get_category_link( get_category_by_slug('news')->cat_ID); ?>">News</a></li>
				<li class="nav--li"><a href="<?php echo home_url('event') ?>">Event</a></li>
				<li class="nav--li"><a href="<?php echo home_url('blog') ?>">Blog</a></li>
				<li class="nav--li"><a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>">Contact</a></li>
			</ul>

			<div class="header__humburger">
				<a href="#">
				<div class="header__humburger--menu">MENU</div></a>
			</div>

			<div class="header__humburger--close">
				<a href="#">
				<div class="header__humburger--close--menu">MENU</div></a>
			</div>
		</nav>


			</div>
	</div>

	<nav class="humburger--open">
		<ul class="humburger--open--ul">
				<li class="humburger--open--li"><a href="#">Concept</a></li>
				<li class="humburger--open--li"><a href="#">News</a></li>
				<li class="humburger--open--li"><a href="#">Event</a></li>
				<li class="humburger--open--li"><a href="#">Blog</a></li>
				<li class="humburger--open--li"><a href="#">Contact</a></li>
			</ul>
	</nav>

</header>