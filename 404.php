<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e(' 404 お探しのページを表示できません。', '_s'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="desc"><?php esc_html_e('申し訳ありません。お探しのページは見つかりませんでした。お探しのページは移動、または削除された可能性がございます。', '_s'); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
