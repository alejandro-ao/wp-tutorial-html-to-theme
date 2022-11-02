<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
	<div class="inner">
		<ul class="menu">
			<li>&copy; Untitled. All rights reserved.</li>
			<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>
</footer>

<!-- Theme Scripts -->
<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.scrollex.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.scrolly.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/browser.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/breakpoints.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/util.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>