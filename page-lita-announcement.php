<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="PRプロフェッショナル協会">
	 <meta property="og:url" content="https://pr-professional.jp/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="PRプロフェッショナル協会">
	<meta property="og:image" content="http://pr-professional.jp/wp-content/uploads/2019/08/ogp_prpro.jpg">
	<meta property="og:description" content="PRプロフェッショナル協会は、結果が出る日本最先端のPRやSNSのスキルが身につくPR塾（PRプロフェッショナル講座）を開催しています。協会代表理事・笹木郁乃が直接指導。PRプロフェッショナルの資格を取得して、あなたもPRを仕事にして活躍しませんか？">
	<meta property="og:site_name" content="一般社団法人PRプロフェッショナル協会">
	<meta property="og:locale" content="ja">
	<meta name="google-site-verification" content="UbJlYhmygncZaCHiPXNZQIxrM958EGv0rh29-9Q8h7E" />
	<title>
	<?php if (is_front_page()): ?>
	<?php echo('一般社団法人 PRプロフェッショナル協会'); ?>
	<?php elseif (is_page('2')): ?>
	<?php echo('会社概要 | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_page('18')): ?>
	<?php echo('PR代行サービス | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_post_type_archive('column')): ?>
	<?php echo('PRコラム | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_tax('column')): ?>
	<?php echo('タグ | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_archive()): ?>
	<?php echo('卒業生の声 | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_page('20')): ?>
	<?php echo('事例紹介 | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php elseif (is_page('16')): ?>
	<?php echo('お問い合わせ | 一般社団法人 PRプロフェッショナル協会') ?>
	<?php endif; ?>
	</title>
<meta name="google-site-verification" content="HM36XUUr3F6qhGP2P7Fn0DUXRbqDxLGCXSMaCNdXJ10" />
	<!-- <link rel="icon" type="image/x-icon" href="<?php echo content_url() ?>/themes/association/assets/img/favicon.ico"> -->

	<!-- adobe fonts -->
	<script>
		(function(d) {
			var config = {
			kitId: 'ons2kpn',
			scriptTimeout: 3000,
			async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		})(document);
	</script>
	<?php wp_head(); ?>
	<!-- <script src="<?php echo content_url() ?>/themes/association/assets/js/script.js"></script> -->
</head>
<body <?php body_class(); ?>>
<?php if (is_front_page()): ?>
<div class="top-header">
<?php else: ?>
<div class="site-header-wrapper">
<?php endif; ?>
	<header class="site-header">
		<div class="site-branding">
			<!-- <a href="/"><img src="<?php echo content_url() ?>/uploads/2019/07/logo.png" alt="" class="logo"></a> -->
		</div><!-- .site-branding -->

		<nav class="site-navigation main-navigation">
			<div class="pc-nav pc">
				<ul class="nav-upper-wrapper">
					<li class="nav-upper">
						<button class="btn-contact" onclick="location.href='/contact'">お問い合わせ</button>
					</li>
					<li class="mail-magazine">
						<a href="//55auto.biz/ikunosasaki/touroku/sp/entryform2.htm" class="mailmagazine-link" target="_blank">
							<svg
							xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink"
							width="28px" height="23px"
							class="mail-icon fuwafuwa">
							<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
							d="M19.287,10.189 L27.711,2.474 L27.711,21.999 L19.287,10.189 ZM0.234,0.972 L27.643,0.972 L13.938,13.521 L0.234,0.972 ZM0.129,22.050 L0.152,2.462 L8.590,10.189 L0.129,22.050 ZM13.935,15.083 L13.935,15.089 L13.938,15.087 L13.942,15.089 L13.942,15.083 L18.612,10.807 L26.688,22.129 L1.189,22.129 L9.265,10.807 L13.935,15.083 Z"/>
							</svg>
							<span class="description">PR広報担当者のための<br>
								<em class="strong">無料メール講座</em>
							</span>
						</a>
					</li>
				</ul>
					<ul class="nav-lower-wrapper">
						<li class="nav-list"><a href="/about" class="header-link">協会について</a></li>
						<li class="nav-list"><a href="/about-pr-pro" class="header-link">PRプロフェッショナルとは</a></li>
						<li class="nav-list"><a href="/pr-learn" class="header-link">PRを学ぶ</a></li>
						<li class="nav-list"><a href="/post_voice" class="header-link">受講生の声</a></li>
						<li class="nav-list"><a href="/announcement" class="header-link">お知らせ</a></li>
					</ul>
			</div>
			<header class="sp-nav sp">
				<div id="nav-drawer">
					<input id="nav-input" type="checkbox" class="nav-unshown">
					<label id="nav-open" for="nav-input"><span></span></label>
					<label class="nav-unshown" id="nav-close" for="nav-input"></label>
					<div id="nav-content">
						<ul class="sp-nav-wrapper">
							<li class="nav-list"><a href="/">ホーム</a></li>
							<li class="nav-list"><a href="/about">協会について</a>
								<ul class="submenu-wrapper">
									<li class="submenu"><a href="/about#overview-association">協会概要</a></li>
									<li class="submenu"><a href="/about#president-introduction">代表紹介</a></li>
								</ul>
							</li>
							<li class="nav-list"><a href="/about-pr-pro">PRプロフェッショナルとは</a>
								<ul class="submenu-wrapper">
									<li class="submenu"><a href="/about-pr-pro#flow">認定までの流れ</a></li>
								</ul>
							</li>
							<li class="nav-list"><a href="/pr-learn">PRを学ぶ</a>
							<li class="nav-list"><a href="/post_voice">受講生の声</a>
							<li class="nav-list"><a href="/announcement">お知らせ</a></li>
							<li class="nav-list"><a href="/column">コラム</a></li>
							</li>
							<div class="nav-contact">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink"
									width="26px" height="20px"
									class="mail-icon">
									<path fill-rule="evenodd"  fill="rgb(248, 246, 239)"
									d="M25.483,19.999 L0.518,19.999 C0.235,19.999 0.005,19.740 0.005,19.418 L0.005,0.574 C0.005,0.253 0.235,-0.005 0.518,-0.005 L25.483,-0.005 C25.765,-0.005 25.995,0.253 25.995,0.574 L25.995,19.418 C25.995,19.740 25.765,19.999 25.483,19.999 ZM24.517,18.837 L16.966,7.732 L13.017,10.725 L9.007,7.692 L1.439,18.837 L24.517,18.837 ZM1.032,17.533 L8.151,7.045 L1.032,1.662 L1.032,17.533 ZM2.210,1.156 L13.001,9.320 L23.791,1.156 L2.210,1.156 ZM17.820,7.083 L24.968,17.596 L24.968,1.663 L17.820,7.083 Z"/>
								</svg>
								<li class="nav-list"><a href="/contact" class="footer-contact-link">お問い合わせ</a></li>
							</div>
						</ul>
					</div>
				</div>
			</header>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
</div>

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
