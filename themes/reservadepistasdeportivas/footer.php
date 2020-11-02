<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

<!-- Footer Elements -->
<div class="container">

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
	<li class="list-inline-item">
	  <a class="btn-floating btn-fb mx-1" href="">
		<i class="fab fa-facebook-f"> </i>
	  </a>
	</li>
	<li class="list-inline-item">
	  <a class="btn-floating btn-tw mx-1">
		<i class="fab fa-twitter"> </i>
	  </a>
	</li>
	<li class="list-inline-item">
	  <a class="btn-floating btn-gplus mx-1">
		<i class="fab fa-google-plus-g"> </i>
	  </a>
	</li>
	<li class="list-inline-item">
	  <a class="btn-floating btn-li mx-1">
		<i class="fab fa-linkedin-in"> </i>
	  </a>
	</li>
	<li class="list-inline-item">
	  <a class="btn-floating btn-dribbble mx-1">
		<i class="fab fa-dribbble"> </i>
	  </a>
	</li>
  </ul>
  <!-- Social buttons -->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://github.com/adrijupas"> adrijupas.github.io</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
	</footer><!-- #colophon -->
<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>