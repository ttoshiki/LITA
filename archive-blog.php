<?php
get_header();
?>

	<div class="top-page">
		<div class="content-area">
			<main class="site-main">
				<section class="sec blog">
					<div class="heading2-wrapper">
						<h2 class="heading2">代表ブログ</h2>
						<div class="heading2-borderbtm"></div>
					</div>
					<div class="article-blog-wrapper horizontal">
						<article class="article-bloglist-wrapper">
							<ul class="article-bloglist">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<li class="article">
									<time class="post-day"><?php the_time('Y/n/j'); ?></time>
									<h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<header class="entry-header">
										<a href="<?php the_permalink(); ?>"><?php the_title('<h1 class="entry-title">', '</h1>'); ?></a>
									</header><!-- .entry-header -->
									<div class="article-thumb">
										<?php the_post_thumbnail();?>
									</div>
									<?php
                                        if ($terms = get_the_terms($post->ID, 'column_cat')) {
                                            foreach ($terms as $term) {
                                                ?>
												<span class="article-cat"><?php echo esc_html($term->name); ?></span>

											<?php
                                            }
                                        }
                                        ?>
									<div class="body">
										<?php echo the_content(); ?>
									</div>
								</li>
								<?php endwhile; endif; ?>
								<?php
                                    /* 以下、ページャーの表示 */
                                    if (function_exists('pagination')) :
                                        pagination($wp_query->max_num_pages, get_query_var('paged'));
                                    endif;
                                ?>
								<?php wp_reset_postdata(); ?>
							</ul>
						</article>
						<div class="sidebar">
							<div class="new-article-wrapper">
								<h4 class="new-aticle sidebar-title">新着記事</h4>
								<ul>
									<?php
                                        $wp_query = new WP_Query();
                                        $param = array(
                                            'posts_per_page' => '5', //表示件数。-1なら全件表示
                                            'post_type' => 'blog', //カスタム投稿タイプの名称を入れる
                                            'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                                        );
                                        $wp_query->query($param);
                                        if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
									<li class="sidebar-article-list"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</section>

			</main><!-- .main -->
		</div><!-- .content-area -->
	</div><!-- top-page -->

<?php
get_sidebar();
get_footer();
