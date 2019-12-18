<?php
get_header();
?>

	<div class="page-contact">
		<div class="content-area fadein">
			<main>
                <div class="contact">
                    <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>
                </div>

			</main><!-- .main -->
		</div><!-- .content-area -->
	</div><!-- top-page -->

<?php
get_sidebar();
get_footer();
