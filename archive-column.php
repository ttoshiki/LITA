<?php
get_header();
?>
<head><meta name="description" content="PRに関するお役立ち情報やテクニックをお伝えするPRコラム。SNS活用法やテレビ、メディアPRの強化など実践的な内容をお届けしています。6000人以上に購読されている「PR広報担当者のための無料メール講座」ぜひご登録ください。">
	<meta name="keywords" content="PRのお役立ち情報,無料メール講座,LITA,メディアPR,ノウハウ,PR広報担当者,">
	<!--<h1>PRコラム│PRのお役立ち情報を随時更新中！LITA活動報告やPRテクニック、PR実践記事まで！</h1>-->
</head>
	<div class="column-page">
		<div class="content-area">
			<main class="main">
				<section class="sec">
					<div class="heading2-wrapper fadein">
						<h2 class="heading2">PR Column</h2>
						<div class="heading2-borderbtm"></div>
						<p class="subtitle">PRのお役立ち情報を更新しています</p>
					</div>
					<div class="article-main-wrapper fadein">
						<article class="article-list-wrapper">
							<ul class="article-list">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<li class="article">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail();?>
										<?php
                                            if ($terms = get_the_terms($post->ID, 'column_cat')) {
                                                foreach ($terms as $term) { ?>
												<?php if ($term->slug === 'blog') { ?>
															<span class="article-cat blog">
														<?php } else { ?>
															<span class="article-cat">
														<?php } ?>
													<?php echo esc_html($term->name);?></span>
												<?php }
                                            }
                                        ?>
										<span class="daytime"><?php the_time('Y.m.d') ?></span>
										<span class="article-title"><?php the_title(); ?></span>
									</a>
								</li>
								<?php endwhile; endif; ?>
								<?php wp_reset_postdata(); ?>
							</ul>
						<?php
                            /* 以下、ページャーの表示 */
                            if (function_exists('pagination')) :
                                pagination($wp_query->max_num_pages, get_query_var('paged'));
                            endif;

                        ?>

						</article>
						<div class="sidebar">
							<div class="new-article-wrapper">
								<h4 class="new-aticle sidebar-title">新着記事</h4>
								<ul>
									<?php
                                        $wp_query = new WP_Query();
                                        $param = array(
                                            'posts_per_page' => '6', //表示件数。-1なら全件表示
                                            'post_type' => 'column', //カスタム投稿タイプの名称を入れる
                                            'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                                        );
                                        $wp_query->query($param);
                                        if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
									<li class="sidebar-article-list">
										<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
										</a>
									</li>
									<?php endwhile; endif; ?>
								</ul>
							</div>
							<div class="category-wrapper">
								<h4 class="category sidebar-title">カテゴリー</h4>
								<ul class="category-list">
									<?php
                                        $args = array(
                                        'style'              => 'list',
                                        'title_li'           => __(''),
                                        'taxonomy'           => 'column_cat',
                                        );
                                        wp_list_categories($args);
                                    ?>
								</ul>
							</div><!-- category-wrapper -->
						</div>
					</div><!-- article-main-wrapper -->
				</section>
				<?php get_template_part('mailMagazine-btn'); ?>
				<?php get_template_part('bookPresentPlanning'); ?>
			</main><!-- .main -->
		</div><!-- .content-area -->
	</div><!-- top-page -->

<?php
get_sidebar();
get_footer();
