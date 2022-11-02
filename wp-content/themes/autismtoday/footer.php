<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autismtoday
 */

?>

</div>
<footer id="colophon" class="site-footer">
	<!-- top -->
	<div class="top-footer">
		<?php if (is_active_sidebar('upper-footer-logo')) : ?>
			<?php dynamic_sidebar('upper-footer-logo'); ?>
		<?php endif; ?>
	</div>

	<!-- mid -->
	<div class="mid-footer flex-row">
		<div class="col mid-col-one">
			<!-- first widget -->
			<?php if (is_active_sidebar('mid-footer-col-one')) : ?>
				<?php dynamic_sidebar('mid-footer-col-one'); ?>
			<?php endif; ?>
		</div>

		<div class="col mid-col-two">
			<!-- second widget -->
			<?php if (is_active_sidebar('mid-footer-col-two')) : ?>
				<?php dynamic_sidebar('mid-footer-col-two'); ?>
			<?php endif; ?>
		</div>

		<div class="col mid-col-three">
			<!-- third widget -->
			<?php if (is_active_sidebar('mid-footer-col-three')) : ?>
				<?php dynamic_sidebar('mid-footer-col-three'); ?>
			<?php endif; ?>
		</div>

		<div class="col mid-col-four">
			<!-- third widget -->
			<?php if (is_active_sidebar('mid-footer-col-four')) : ?>
				<?php dynamic_sidebar('mid-footer-col-four'); ?>
			<?php endif; ?>
		</div>
	</div> <!-- end mid footer content -->

	<div class="bottom-footer">
		<div class="soc-med">
			<span>Follow us</span>
			<ul>


				<!-- facebook -->
				<li>

					<a href="https://www.facebook.com">
						<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
						</svg>
					</a>
				</li>
				<!-- youtube  -->
				<li>

					<a href="https://www.youtube.com">
						<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="youtube-icon">
							<path fill="currentColor" d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z" />
						</svg>
					</a>
				</li>
				<!-- twitter -->
				<li>
					<a href="https://www.twitter.com">
						<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path fill="currentColor" d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
						</svg>
					</a>
				</li>
				<!-- linkedin -->
				<li>
					<a href="https://www.linkedin.com">
						<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path fill="currentColor" d="M19 3A2 2 0 0 1 21 5V19A2 2 0 0 1 19 21H5A2 2 0 0 1 3 19V5A2 2 0 0 1 5 3H19M18.5 18.5V13.2A3.26 3.26 0 0 0 15.24 9.94C14.39 9.94 13.4 10.46 12.92 11.24V10.13H10.13V18.5H12.92V13.57C12.92 12.8 13.54 12.17 14.31 12.17A1.4 1.4 0 0 1 15.71 13.57V18.5H18.5M6.88 8.56A1.68 1.68 0 0 0 8.56 6.88C8.56 5.95 7.81 5.19 6.88 5.19A1.69 1.69 0 0 0 5.19 6.88C5.19 7.81 5.95 8.56 6.88 8.56M8.27 18.5V10.13H5.5V18.5H8.27Z" />
						</svg>
					</a>
				</li>
				<!-- instagram -->
				<li>
					<a href="https://www.instagram.com">
						<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
							<path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
							</path>
						</svg>
					</a>
				</li>
			</ul>
		</div>
		<div class="copyright">
			<p>&copy; Copyright 2022 Autism Today Foundation, a 501(c)(3) Not-for-Profit Organization</p>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>