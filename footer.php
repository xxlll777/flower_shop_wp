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
				<?php $blog = get_post_type_archive_link( 'blog' ); ?>
				<li class="footer__nav--li"><a href="<?php echo $blog; ?>">Blog</a></li>
				<li class="footer__nav--li"><a href="<?php echo home_url(); ?>">Contact</a></li>
			</ul>
		</div>
	</div>
</footer>

<script src="<?php echo $js_url; ?>/common.js"></script>

	<?php wp_footer(); ?>
</body>
</html>


