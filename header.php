<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php if (is_home() || is_front_page()) : ?>
	<meta name="description"
		content="LITAはクライアントの認知拡大に繋がるための情報・実績の流れをつくり、口コミの渦を広げ「ヒット」「話題」を巻き起こし売上拡大へと導きます。メディア露出 × SNS拡散性について最新の広報PRを常に追求し、時代に対応した新たなPRを提案し続けます。利他の心でお客様や社会への貢献を常に優先し、二人三脚で売上拡大に繋がる広報PRを展開していきます。">
	<meta name="keywords" content="LITA,利他,売上拡大のビジネスパートナー,広報PR戦略,PR塾,無料メール講座,笹木郁乃,認知拡大">
	<?php endif; ?>

	<meta property="og:type" content="website">
	<meta property="og:title" content="PR会社LITA（売上拡大のビジネスパートナー）">
	<!-- <meta property="og:image" content="http://lita-pr.com/wp-content/uploads/2019/05/ogp_lita.png"> -->
	<meta property="og:description"
		content="株式会社LITAは、売上拡大のビジネスパートナーのPR会社です。スマホ時代に合った広報PR戦略で、メディア露出から口コミの渦という流れを作り、あなたのブランドを全国区に。PR歴11年のLITA代表・笹木郁乃が直接PR指導をする、3ヶ月でPRスキルを習得できるPR塾も開催。">
	<meta property="og:site_name" content="株式会社LITA">
	<meta name="google-site-verification" content="UbJlYhmygncZaCHiPXNZQIxrM958EGv0rh29-9Q8h7E" />
	<title>
		<?php if (is_front_page()): ?>
		<?php echo('PR会社LITA（売上拡大のビジネスパートナー）'); ?>
		<?php elseif (is_page('2')): ?>
		<?php echo('会社概要 | PR会社LITA（売上拡大のパートナー）') ?>
		<?php elseif (is_page('18')): ?>
		<?php echo('PR代行サービス | PR会社LITA（売上拡大のパートナー）') ?>
		<?php elseif (is_post_type_archive('column')): ?>
		<?php echo('PRコラム | PR会社LITA（売上拡大のパートナー）') ?>
		<?php elseif (is_archive() && (get_post_type() == 'sns_voice')): ?>
		<?php echo('SNS口コミ | PR会社LITA（売上拡大のパートナー）') ?>
		<?php elseif (is_archive() && (get_post_type() == 'post')): ?>
		<?php echo('活動実績 | PR会社LITA（売上拡大のパートナー）') ?>
		<?php elseif (is_archive()): ?>
		<?php echo('タグ | PR会社LITA（売上拡大のパートナー）') ?>
		<?php elseif (is_page('20')): ?>
		<?php echo('事例紹介 | PR会社LITA（売上拡大のパートナー）') ?>
		<?php elseif (is_page('16')): ?>
		<?php echo('お問い合わせ | PR会社LITA（売上拡大のパートナー）') ?>
		<?php endif; ?>
	</title>

	<link rel="icon" type="image/x-icon" href="<?php echo content_url() ?>/themes/lita/assets/img/favicon.ico">
	<link rel="stylesheet"
		href="<?php bloginfo('template_url') ?>/style.css?<?php echo file_date(get_template_directory() . '/style.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
	<?php if (is_page('entry')) : ?>
	<link rel="stylesheet" href="<?php echo content_url() ?>/themes/lita/saiyo.css">
	<?php endif; ?>
	<script src="https://code.jquery.com/jquery-3.4.0.min.js"
		integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
	<script src="<?php echo content_url() ?>/themes/lita/assets/js/script.js" defer></script>
	<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" type="text/javascript" charset="UTF-8"></script>
	<!-- facebook シェアボタン用 -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous"
		src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v6.0"></script>

	<?php if (is_home() || is_front_page()) : ?>
		<link rel="stylesheet" href="<?= get_theme_file_uri(); ?>/assets/css/modaal.min.css">
		<script src="<?= get_theme_file_uri(); ?>/assets/js/modaal.min.js" defer></script>
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php if (is_page() || (get_post_type() !== 'post')) {
    body_class('header-nav');
} else {
    body_class();
} ?>>
		<div class="top-header">
		<?php if (!is_archive() || get_post_type() !== 'post') { ?>
			<header class="site-header">
				<div class="site-branding">
					<?php if (is_front_page()): ?>
						<div class="pc pc-logo">
							<a href="<?= home_url() ?>/"><img src="<?php echo content_url() ?>/themes/lita/assets/img/img_headerlogo.png" srcset="<?php echo content_url() ?>/themes/lita/assets/img/img_headerlogo@2x.png 2x" alt=""
							class="logo"></a>
						</div>
						<div class="sp">
							<a href="<?= home_url() ?>/"><img src="<?php echo content_url() ?>/themes/lita/assets/img/img_headerlogo_sp.png" width="74" height="21" alt=""
							class="logo"></a>
						</div>
					<?php else: ?>
						<div class="pc pc-logo">
							<a href="<?= home_url() ?>/"><img src="<?php echo content_url() ?>/themes/lita/assets/img/img_headerlogo.png" srcset="<?php echo content_url() ?>/themes/lita/assets/img/img_headerlogo@2x.png 2x" alt=""
							class="logo"></a>
						</div>
						<div class="sp">
							<a href="<?= home_url() ?>/"><img src="<?php echo content_url() ?>/themes/lita/assets/img/img_headerlogo_sp.png" width="74" height="21" alt=""
							class="logo"></a>
						</div>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<nav class="site-navigation main-navigation">
					<div class="pc-nav pc">
						<div class="navcenter-wrapper">
							<ul class="navcenter-lower">
								<li class="nav-list"><a href="<?= home_url() ?>/about" class="header-link">LITAとは</a>
									<ul class="submenu-wrapper">
										<li class="submenu"><a href="<?= home_url() ?>/about-lita"
												class="header-link">会社概要</a></li>
										<li class="submenu"><a href="<?= home_url() ?>/about-lita#president-introduction"
												class="header-link">代表紹介</a></li>
									</ul>
								</li>
								<li class="nav-list"><a href="<?= home_url() ?>/service-list" class="header-link">PR代行</a></li>
								<li class="nav-list"><a href="https://pr-professional.jp/kobetupage/" class="header-link"
										target="_blank">PR塾</a></li>
								<li class="nav-list"><a href="https://sns-pr.com/" class="header-link">人材マッチング</a></li>
								<li class="nav-list"><a href="<?= home_url() ?>/announcement" class="header-link">活動実績</a></li>
								<li class="nav-list"><a href="<?= home_url() ?>/column" class="header-link">PRコラム</a></li>
								<li class="nav-list"><a href="<?= home_url() ?>/entry" class="header-link">採用情報</a>
									<ul class="submenu-wrapper">
										<li class="submenu"><a href="<?= home_url() ?>/entry-form" class="header-link">エントリー</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="navcenter-wrapper2">
							<ul class="navcenter-lower __contact">
								<li class="nav-list __tel lg">
									<a href="tel:0358010777">
										<img src="<?php echo content_url() ?>/themes/lita/assets/img/phone.png" srcset="<?php echo content_url() ?>/themes/lita/assets/img/phone@2x.png 2x" alt="03-5801-0777 平日10～17時（土日祝休み）">
									</a>
								</li>
								<li class="nav-list __mail lg">
									<a href="<?= home_url() ?>/contact/">
										<img src="<?php echo content_url() ?>/themes/lita/assets/img/contact.png" srcset="<?php echo content_url() ?>/themes/lita/assets/img/contact@2x.png 2x" alt="03-5801-0777 平日10～17時（土日祝休み）">
									</a>
								</li>
								<li class="nav-list __tel sm">
									<a href="tel:0358010777">
										<img src="<?php echo content_url() ?>/themes/lita/assets/img/phone2.png" srcset="<?php echo content_url() ?>/themes/lita/assets/img/phone2@2x.png 2x" alt="03-5801-0777 平日10～17時（土日祝休み）">
									</a>
								</li>
								<li class="nav-list __mail sm">
									<a href="<?= home_url() ?>/contact/">
										<img src="<?php echo content_url() ?>/themes/lita/assets/img/contact2.png" srcset="<?php echo content_url() ?>/themes/lita/assets/img/contact2@2x.png 2x" alt="03-5801-0777 平日10～17時（土日祝休み）">
									</a>
								</li>
							</ul>
						</div>
					</div>
					<header class="sp-nav sp">
						<div id="nav-drawer">
							<input id="nav-input" type="checkbox" class="nav-unshown">
							<label id="nav-open" for="nav-input"><span></span></label>
							<label class="nav-unshown" id="nav-close" for="nav-input"></label>
							<div id="nav-content">
								<ul class="sp-nav-wrapper">
									<li class="nav-list"><a href="<?= home_url() ?>/">ホーム</a></li>
									<li class="nav-list"><a href="<?= home_url() ?>/about">LITAとは</a>
										<ul class="submenu-wrapper">
											<li class="submenu"><a href="<?= home_url() ?>/about-lita">会社概要</a></li>
											<li class="submenu"><a href="<?= home_url() ?>/about-lita#president-introduction">代表紹介</a>
											</li>
										</ul>
									<li class="nav-list"><a href="<?= home_url() ?>/service-list">PR代行</a>
									<li class="nav-list"><a href="https://pr-professional.jp/kobetupage/">PR塾</a>
									<li class="nav-list"><a href="https://sns-pr.com/" class="header-link">人材マッチング</a></li>
									<li class="nav-list"><a href="<?= home_url() ?>/announcement">活動実績</a>
									<li class="nav-list"><a href="<?= home_url() ?>/column">PRコラム</a></li>
									<li class="nav-list"><a href="<?= home_url() ?>/entry" class="header-link">採用情報</a>
										<ul class="submenu-wrapper">
											<li class="submenu"><a href="<?= home_url() ?>/entry-form" class="header-link">エントリー</a></li>
										</ul>
									</li>
									<div class="nav-contact">
										<img src="<?php echo content_url() ?>/themes/lita/assets/img/img_mail.png" width="27" height="25" alt="">
										<li class="nav-list"><a href="<?= home_url() ?>/contact" class="footer-contact-link">お問い合わせ</a>
										</li>
									</div>
								</ul>
							</div>
						</div>
					</header>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			<?php } ; ?>
		</div>
<?php if (!is_archive() || get_post_type() !== 'post') { ?>
	<div class="site-main__wrapper">
<?php } ?>
