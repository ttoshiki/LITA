<!-- お知らせ一覧のアーカイブ -->
<?php
get_header();
?>
<head>
	<meta name="description" content="LITAの活動実績となるメディアやニュース記事など、過去から最新の情報までご確認頂けます。メディアでの活躍とLITA自身の活動を是非ご覧ください。">
	<meta name="keywords" content="活動実績,メディア,ニュース,LITAの歴史,PRプロフェッショナル認定資格,PR,">
	<!--<h1>活動実績│LITAのこれまでのメディア情報やニュースを掲載中！</h1>-->
</head>
	<div class="top-page">
		<div class="content-area">
			<main class="site-main">
				<section class="sec announcement">
					<div class="heading2-wrapper fadein">
						<h2 class="heading2">お知らせ</h2>
						<div class="heading2-borderbtm"></div>
					</div>
					<div class="announcement-wrapper horizontal fadein">
						<article class="announcement-list-wrapper">
							<ul class="announcement-tab horizontal">
								<li class="cat"><a href="#tab1" class="tab-link">ALL</a></li>
								<li class="cat"><a href="#tab2" class="tab-link"><?php echo get_cat_name(1); ?></a></li>
								<li class="cat"><a href="#tab3" class="tab-link"><?php echo get_cat_name(5); ?></a></li>
							</ul>
							<div class="annoucement-tab-content">
								<div class="announcement-tab-area" id="tab1">
									<ul>
										<?php global $post;
                                        $args = array(
                                            'post_type' => 'post',
                                            'no_found_rows' => true,
                                            'posts_per_page' => -1,
                                        );
                                        $myposts = get_posts($args);
                                        foreach ($myposts as $post) {
                                            setup_postdata($post); ?>
											<li class="announcement-list horizontal" id="<?php echo get_the_id(); ?>">
												<time class="day"><?php echo the_time('Y.m.d'); ?></time>
												<div class="title-img-wrapper">
													<?php if (post_custom('link_url')): ?>
														<a href="<?php the_field('link_url')?>" class="article-link">
													<?php endif; ?>
															<div class="posttitle"><?php the_title(); ?></div>
														</a>
													<?php the_content(); ?>
														<?php if (post_custom('link_url')): ?>
													<?php endif; ?>
													<?php if (post_custom('img1') || post_custom(('img2'))): ?>  <!-- カスタムフィールド に入力があるとき -->
														<div class="img-wrapper">
														<?php if (post_custom('link_url')): ?>
															<a href="<?php the_field('link_url')?>" class="article-link">
														<?php endif; ?>
															<img src="<?php the_field('img1'); ?>" class="announce-img">
															<img src="<?php the_field('img2'); ?>" class="announce-img">
														<?php if (post_custom('link_url')): ?>
															</a>
														<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
											</li>
										<?php
                                        }
                                        wp_reset_postdata();
                                        ?>
									</ul>
								</div>
								<div class="announcement-tab-area" id="tab2">
									<ul>
										<?php announce_cat_post_list(1); ?>
									</ul>
								</div>
								<div class="announcement-tab-area" id="tab3">
									<ul>
										<?php announce_cat_post_list(5); ?>
									</ul>
								</div>
							</div>

						</article>
					</div>
				</section>

			</main><!-- .main -->
		</div><!-- .content-area -->
	</div><!-- top-page -->
<?php
get_sidebar();
get_footer();
