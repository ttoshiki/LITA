<?php
get_header();
?>

	<div class="top-page">
		<div class="content-area">
			<main class="site-main">
				<section class="sec activity">
					<div class="heading2-wrapper">
						<h2 class="heading2">代表活動実績</h2>
						<div class="heading2-borderbtm"></div>
					</div>
					<div class="activity-wrapper horizontal">
						<article class="activity-list-wrapper">
							<ul class="activity-list">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<li class="activity">
									<time class="post-day"><?php the_time('Y.n.j'); ?></time>
									<header class="entry-header">
										<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
									</header><!-- .entry-header -->
								</li>
								<?php endwhile; endif; ?>
								<?php wp_reset_postdata(); ?>
							</ul>
						</article>
					</div>
				</section>

			</main><!-- .main -->
		</div><!-- .content-area -->
	</div><!-- top-page -->
<?php
get_sidebar();
get_footer();
