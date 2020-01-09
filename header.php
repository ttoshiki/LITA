<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php if (is_home() || is_front_page()) : ?>
	<meta name="description" content="LITAはクライアントの認知拡大に繋がるための情報・実績の流れをつくり、口コミの渦を広げ「ヒット」「話題」を巻き起こし売上拡大へと導きます。メディア露出 × SNS拡散性について最新の広報PRを常に追求し、時代に対応した新たなPRを提案し続けます。利他の心でお客様や社会への貢献を常に優先し、二人三脚で売上拡大に繋がる広報PRを展開していきます。">
	<meta name="keywords" content="LITA,利他,売上拡大のビジネスパートナー,広報PR戦略,PR塾,無料メール講座,笹木郁乃,認知拡大">
	<?php endif; ?>
	<?php if (is_page('about-lita')) : ?>
	<!--<h1>LITAとは│会社概要や代表紹介、LITA設立までのストーリー</h1>-->
	<?php endif; ?>
	<?php if (is_page('service-list')) : ?>
	<!--<h1>PR代行サービス│広報PRのお悩みを解決するメソッドやLITAの3つの約束やサービスの流れ</h1>-->
	<?php endif; ?>
	<?php if (is_page('service')) : ?>
	<!--<h1>PR塾│ 選ばれるあなたになる4つのスキルや5つの特長を。協力サポート体制</h1>-->
	<?php endif; ?>

	<!-- <meta property="og:url" content="https://lita-pr.com/"> -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="PR会社LITA（売上拡大のビジネスパートナー）">
	<!-- <meta property="og:image" content="http://lita-pr.com/wp-content/uploads/2019/05/ogp_lita.png"> -->
	<meta property="og:description" content="株式会社LITAは、売上拡大のビジネスパートナーのPR会社です。スマホ時代に合った広報PR戦略で、メディア露出から口コミの渦という流れを作り、あなたのブランドを全国区に。PR歴11年のLITA代表・笹木郁乃が直接PR指導をする、3ヶ月でPRスキルを習得できるPR塾も開催。">
	<meta property="og:site_name" content="株式会社LITA">
	<!-- <meta property="og:locale" content="ja"> -->
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
	<?php elseif (is_tax('column')): ?>
	<?php echo('タグ | PR会社LITA（売上拡大のパートナー）') ?>
	<?php elseif (is_archive()): ?>
	<?php echo('活動実績 | PR会社LITA（売上拡大のパートナー）') ?>
	<?php elseif (is_page('20')): ?>
	<?php echo('事例紹介 | PR会社LITA（売上拡大のパートナー）') ?>
	<?php elseif (is_page('16')): ?>
	<?php echo('お問い合わせ | PR会社LITA（売上拡大のパートナー）') ?>
	<?php endif; ?>
	</title>

	<link rel="icon" type="image/x-icon" href="<?php echo content_url() ?>/themes/lita/assets/img/favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
	<link rel="stylesheet" href="<?php echo content_url() ?>/themes/lita/assets/css/swiper.min.css">
	<?php if (is_page('entry')) : ?>
	<link rel="stylesheet" href="<?php echo content_url() ?>/themes/lita/saiyo.css">
	<?php endif; ?>
	<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
	<script src="<?php echo content_url() ?>/themes/lita/assets/js/swiper.min.js"></script>
	<script src="<?php echo content_url() ?>/themes/lita/assets/js/script.js"></script>
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
	<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" type="text/javascript" charset="UTF-8"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if (is_front_page()): ?>
<div class="top-header">
<?php else: ?>
<div class="site-header">
<?php endif; ?>
	<header class="site-header">
		<div class="site-branding">
			<?php if (is_front_page()): ?>
			<a href="/"><img src="<?php echo content_url() ?>/themes/lita/assets/img/lita_logo_white.svg" alt="" class="logo"></a>
			<?php else: ?>
			<a href="/"><img src="<?php echo content_url() ?>/themes/lita/assets/img/lita_logo.svg" alt="" class="logo"></a>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav class="site-navigation main-navigation">
			<div class="pc-nav pc">
				<div class="navcenter-wrapper">
					<div class="navcenter-upper">
						<div class="phone">
							<!-- <img src="<?php echo content_url() ?>/themes/lita/assets/img/icon_phone.png" alt="" class="icon-phone"> -->
							<svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;margin-top: -16px;" xml:space="preserve" class="icon-phone">
							<style type="text/css">
								.st0{fill:#374149;}
							</style>
							<g>
								<path class="st0" d="M454.824,0H57.176C25.726,0,0,25.726,0,57.176v397.648C0,486.27,25.726,512,57.176,512h397.648
									C486.27,512,512,486.27,512,454.824V57.176C512,25.726,486.27,0,454.824,0z M405.242,357.355
									c-2.035,8.047-14.18,27.29-27.91,39.126c-0.394,0.336-0.778,0.702-1.176,1.027c-0.074,0.058-0.148,0.109-0.218,0.168
									c-3.875,3.133-7.863,5.668-11.805,7.199c-0.078,0.027-0.16,0.042-0.238,0.074c-1.117,0.422-2.23,0.746-3.332,1
									c-1.218,0.254-2.426,0.402-3.61,0.402l-0.726-0.015c-5.316-0.238-14.754-3.313-28.851-9.406
									c-28.114-12.148-55.043-27.656-80.043-46.09c-32.918-24.215-61.894-53.18-86.125-86.094
									c-18.469-25.028-34.004-51.996-46.176-80.157c-6.09-14.09-9.164-23.523-9.402-28.847c-0.93-20.817,38.398-46.348,48.977-49.02
									c2.824-0.714,5.789-1.074,8.816-1.074c1.528,0,3.051,0.09,4.566,0.262c5.606,0.668,10.774,2.473,15.469,5.398
									c1.489,0.945,2.535,1.707,3.551,2.519c2.691,2.199,4.613,4.125,6.172,6.133l20.675,26.516
									c11.215,14.382,10.414,34.637-1.914,48.156c-3.738,4.098-8.989,9.594-12.79,12.5c-0.074,0.058-0.312,0.238-0.355,0.988
									c-0.598,10.672,33.543,49.954,44.5,60.481c10.375,10.797,49.215,44.574,60.317,44.57c0.465,0,0.836-0.074,1.046-0.203
									c3.09-3.969,8.582-9.215,12.672-12.946c6.922-6.312,15.89-9.789,25.25-9.789c8.378,0,16.301,2.722,22.914,7.875l26.512,20.672
									C403.676,327.875,408.871,343.019,405.242,357.355z" style="fill: rgb(255, 255, 255);"></path>
							</g>
							</svg>

							<a href="tel:03-5801-0777" style="color:#ffffff;text-decoration: none;"><address class="phone-number" style="line-height:1;">03-5801-0777<br><span style="font-size:0.7em;font-weight:300;margin-left:-20px;">平日10〜17時（土日祝休み）</span></address></a>
						</div>
						<button class="btn-contact" onclick="location.href='/contact'">お問い合わせ</button>
					</div>
					<ul class="navcenter-lower">
							<li class="nav-list"><a href="/about" class="header-link">LITAとは</a>
								<ul class="submenu-wrapper">
									<li class="submenu"><a href="/about-lita#company-overview" class="header-link">会社概要</a></li>
									<li class="submenu"><a href="/about-lita#president-introduction" class="header-link">代表紹介</a></li>
								</ul>
							</li>
							<li class="nav-list"><a href="/service-list" class="header-link">PR代行</a>
							<li class="nav-list"><a href="//pr-professional.jp/pr-learn/" class="header-link" target="_blank">PR塾</a></li>
							<li class="nav-list"><a href="/column" class="header-link">PRコラム</a></li>
							<li class="nav-list"><a href="/announcement" class="header-link">活動実績</a></li>
							<li class="nav-list"><a href="/entry" class="header-link">採用情報</a>
						<ul class="submenu-wrapper">
					                <li class="submenu"><a href="/entry-form" class="header-link">エントリー</a></li>
							</ul>
							<li class="nav-list  RightToLeft inmail">
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
				</div>
			</div>
			<header class="sp-nav sp">
				<div id="nav-drawer">
					<input id="nav-input" type="checkbox" class="nav-unshown">
					<label id="nav-open" for="nav-input"><span></span></label>
					<label class="nav-unshown" id="nav-close" for="nav-input"></label>
					<div id="nav-content">
						<ul class="sp-nav-wrapper">
							<li class="nav-list"><a href="/">ホーム</a></li>
							<li class="nav-list"><a href="/about">LITAとは</a>
								<ul class="submenu-wrapper">
									<li class="submenu"><a href="/about-lita#company-overview">会社概要</a></li>
									<li class="submenu"><a href="/about-lita#president-introduction">代表紹介</a></li>
								</ul>
							<li class="nav-list"><a href="/service-list">PR代行</a>
							<li class="nav-list"><a href="//pr-professional.jp/pr-learn/">PR塾</a>
							<li class="nav-list"><a href="/column">PRコラム</a></li>
							<li class="nav-list"><a href="/announcement">活動実績</a>
							<li class="nav-list"><a href="/entry" class="header-link">採用情報</a>
								<ul class="submenu-wrapper">
					                <li class="submenu"><a href="/entry-form" class="header-link">エントリー</a></li>
							</ul>
								<!-- <ul class="submenu-wrapper">
									<li class="submenu"><a href="#">クライアント実践</a></li>
									<li class="submenu"><a href="#">PR事例</a></li>
									<li class="submenu"><a href="#">クライアントの声</a></li>
								</ul> -->
							</li>
							<div class="nav-contact">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink"
									width="41px" height="32px"
									class="mail-icon"
									>
									<path fill-rule="evenodd" fill="rgb(248, 246, 239)"
									d="M39.733,31.095 L1.300,31.095 C0.863,31.095 0.510,30.702 0.510,30.218 L0.510,1.771 C0.510,1.287 0.863,0.894 1.300,0.894 L39.733,0.894 C40.170,0.894 40.522,1.287 40.522,1.771 L40.522,30.218 C40.522,30.702 40.170,31.095 39.733,31.095 ZM38.248,29.341 L26.620,12.576 L20.543,17.095 L14.368,12.517 L2.718,29.341 L38.248,29.341 ZM2.090,27.370 L13.051,11.540 L2.090,3.412 L2.090,27.370 ZM3.904,2.648 L20.518,14.972 L37.129,2.648 L3.904,2.648 ZM27.937,11.598 L38.943,27.469 L38.943,3.413 L27.937,11.598 Z"/>
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
