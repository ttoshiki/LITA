<?php if (!is_archive() || get_post_type() !== 'post') { ?>
<footer class="site-footer">
	<div class="footer-contact">
		<div class="contact-phone">
			<p class="subtitle">お電話でのお問い合わせ</p>
			<!-- 電話アイコン -->
			    <img src="<?php echo content_url() ?>/themes/lita/assets/img/icon_phone.svg" alt="" class="icon-phone">
			<span class="phone-num">03-4500-8026</span><br><span style="font-size:0.9em;padding-left:15px;">平日10〜17時（土日祝休み）</span>
		</div>
		<button class="contact-mail" onclick="location.href='/contact'">
			<p class="subtitle">メールでのお問い合わせ</p>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				width="28px" height="21px"
				class="icon-form">
				<path fill-rule="evenodd"  fill="rgb(248, 246, 239)"
				d="M27.443,20.999 L0.558,20.999 C0.252,20.999 0.006,20.726 0.006,20.389 L0.006,0.603 C0.006,0.266 0.252,-0.007 0.558,-0.007 L27.443,-0.007 C27.748,-0.007 27.994,0.266 27.994,0.603 L27.994,20.389 C27.994,20.726 27.748,20.999 27.443,20.999 ZM26.404,19.779 L18.270,8.118 L14.018,11.262 L9.700,8.077 L1.550,19.779 L26.404,19.779 ZM1.111,18.408 L8.778,7.397 L1.111,1.744 L1.111,18.408 ZM2.380,1.213 L14.001,9.785 L25.621,1.213 L2.380,1.213 ZM19.191,7.438 L26.890,18.477 L26.890,1.746 L19.191,7.438 Z"/>
			</svg>
			<span class="contact-form">お問い合わせフォーム</span>
		</button>
	</div>
	<div class="nav-link">
		<a href="/" class="footer-logo-link"><img src="<?php echo content_url() ?>/themes/lita/assets/img/lita_logo_white.svg" alt="" class="footer_logo" width="120"></a>
		<nav class="footer-nav">
			<ul class="list-wrapper mailmag sp">
				<div class="mail-magagine-footer">
					<a href="//55auto.biz/ikunosasaki/touroku/sp/entryform2.htm" class="footer-mailmag-link">
					<!-- メールアイコン -->
					<svg
					xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink"
					width="42px" height="26px"
					class="mail-icon-footer">
					<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
					d="M29.168,11.323 L41.993,1.841 L41.993,25.839 L29.168,11.323 ZM0.166,-0.005 L41.889,-0.005 L21.027,15.420 L0.166,-0.005 ZM0.007,25.902 L0.043,1.825 L12.885,11.323 L0.007,25.902 ZM21.022,17.338 L21.022,17.346 L21.027,17.342 L21.033,17.346 L21.033,17.338 L28.141,12.082 L40.436,25.999 L1.620,25.999 L13.913,12.082 L21.022,17.338 Z"/>
					</svg>
					<div class="text-wrapper">
						<span class="mail-magagine-footer-text">
							PR広報担当者のための
						</span>
						<span class="mail-magagine-footer-title">
							無料メール講座
						</span>
					</div>
					</a>
				</div>
			</ul>
			<ul class="list-wrapper">
			<li class="list"><a href="/about-lita"><span class="list-root">-</span>LITAとは</a></li>
				<li class="list"><a href="/about-lita#company-overview">会社概要</a></li>
				<li class="list"><a href="/about-lita#president-introduction">代表紹介</a></li>
			</ul>
			<ul class="list-wrapper">
				<li class="list"><a href="/service-list"><span class="list-root">-</span>PR代行</a></li>
				<li class="list"><a href="//pr-professional.jp/pr-learn/" target="_blank"><span class="list-root">-</span>PR塾</a></li>
			</ul>

			<ul class="list-wrapper">
				<li class="list"><a href="/column"><span class="list-root">-</span>PRコラム</a></li>
				<li class="list"><a href="/announcement"><span class="list-root">-</span>活動実績</a></li>

			</ul>
			<ul class="list-wrapper">
			<li class="list"><a href="/entry"><span class="list-root">-</span>採用情報</a>
				<li class="list"><a href="/entry-form">エントリー</a>
			</ul>
			<ul class="list-wrapper mailmag pc">
				<div class="mail-magagine-footer">
					<a href="//55auto.biz/ikunosasaki/touroku/sp/entryform2.htm" class="footer-mailmag-link" target="_blank">
						<span class="mail-magagine-footer-title">
							MAIL<br>
							MAGAGINE
						</span>
						<!-- メールアイコン -->
						<svg
						xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink"
						width="42px" height="26px"
						class="mail-icon-footer">
						<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
						d="M29.168,11.323 L41.993,1.841 L41.993,25.839 L29.168,11.323 ZM0.166,-0.005 L41.889,-0.005 L21.027,15.420 L0.166,-0.005 ZM0.007,25.902 L0.043,1.825 L12.885,11.323 L0.007,25.902 ZM21.022,17.338 L21.022,17.346 L21.027,17.342 L21.033,17.346 L21.033,17.338 L28.141,12.082 L40.436,25.999 L1.620,25.999 L13.913,12.082 L21.022,17.338 Z"/>
						</svg>
						<span class="mail-magagine-footer-text">
								PR広報担当者のための<br>
								無料メール講座
						</span>
					</a>
				</div>
			</ul>
		</nav>
	</div>
	<button onclick="location.href='/'" class="back-to-top sp">TOPに戻る</button>
	<small class="cp sp">Copy Right &copy; LITA.inc</small>
</footer>

<?php wp_footer(); ?>

<?php } ?>

</body>
</html>