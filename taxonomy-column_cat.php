<?php
get_header();
?>

<div class="content-area">
	<main class="site-main">
		<section class="sec">
			<div class="heading2-wrapper">
				<h2 class="heading2"><?php single_term_title(); ?>の記事一覧</h2>
				<div class="heading2-borderbtm"></div>
			</div>
			<div class="article-main-wrapper -archive">
				<article class="article-list-wrapper -column_cat">
					<ul class="article-list">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li class="article">
							<a href="<?php the_permalink(); ?>" class="article__link">
								<?php the_post_thumbnail();?>
								<?php
                                    if ($terms = get_the_terms($post->ID, 'column_cat')) {
                                        foreach ($terms as $term) {
                                            ?>
								<?php if ($term->slug === 'blog') { ?>
								<span class="article-cat blog">
									<?php } else { ?>
									<span class="article-cat">
										<?php } ?>
										<?php echo esc_html($term->name); ?></span>
									<?php
                                        }
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
                                    $tax_name = get_query_var('column_cat'); //指定したいタクソノミーを指定
                                    $wp_query = new WP_Query();
                                    $param = array(
                                        'posts_per_page' => '5', //表示件数。-1なら全件表示
                                        'post_type' => 'column', //カスタム投稿タイプの名称を入れる
                                        'tax_query' => array(
                                        'relation' => 'OR',
                                            array(
                                                'taxonomy' => 'column_cat',
                                                'field' => 'slug',
                                                'terms' => $tax_name, /* 上記で指定した変数を指定 */
                                            ),
                                        ),
                                        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                                    );
                                    $wp_query->query($param);
                                    if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post();
                                ?>
							<li class="sidebar-article-list"><a
									href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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
					</div>
				</div>
			</div><!-- article-main-wrapper -->
		</section>

	</main><!-- .main -->
</div><!-- .content-area -->

<?php
get_sidebar();
get_footer();
