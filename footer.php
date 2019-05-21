<?php
$root_url = get_stylesheet_directory_uri() ;
$css_url = $root_url . "/css";
$img_url = $root_url . "/images";
$js_url  = $root_url . "/js";
?>

<footer>
	<div class="footer">
		<div class="footer__nav">
			<ul class="footer__nav--ul">
				<li class="footer__nav--li"><a href="<?php echo get_permalink( get_page_by_path('concept') ); ?>">Concept</a></li>
				<li class="footer__nav--li"><a href="<?php echo get_category_link( get_category_by_slug('news')->cat_ID); ?>">News</a></li>
				<li class="footer__nav--li"><a href="<?php echo get_category_link( get_category_by_slug('event')->cat_ID); ?>">Event</a></li>
				<li class="footer__nav--li"><a href="<?php echo get_category_link( get_category_by_slug('blog')->cat_ID); ?>">Blog</a></li>
				<li class="footer__nav--li"><a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>">Contact</a></li>
			</ul>
		</div>
	</div>
</footer>

<script src="js/common.js"></script>

	<?php wp_footer(); ?>
</body>
</html>


