<?php
get_header();
?>

	<div class="page-matching">
		<div class="content-area">
			<main>
				<div class="heroimg-wrapper">
						<img src="<?php echo content_url() ?>/themes/lita/assets/img/matching/main_visual.jpg" srcset="<?php echo content_url() ?>/themes/lita/assets/img/matching/main_visual@2x.jpg" alt="" class="matching__mainVisual pc">
						<img src="<?php echo content_url() ?>/themes/lita/assets/img/matching/main_visual-sp@2x.jpg" alt="" class="matching__mainVisual sp">
						<div class="cover"></div>
						<div class="catch-wrapper"></div>
						<div class="matching__conversionButton sp">
							<a href="#request">
								<img src="<?php echo content_url() ?>/themes/lita/assets/img/conversion_box_btn.png" srcset="<?php echo content_url() ?>/themes/lita/assets/img/conversion_box_btn@2x.png" alt="" class="matching__conversionButtonImage">
							</a>
						</div>
					</div>
				</div>
				<div class="conversion-box-wrapper">
			<div class="conversion-box">
				<div class="box-left firstcv-box-wrapper">
					<em class="text">まずはお気軽にご相談ください</em>
					<div class="telbox">
						<!-- 電話アイコン -->
						<img src="<?php echo content_url() ?>/themes/lita/assets/img/icon_phone.svg" alt="" class="icon-phone">
						<address>
							<a href="tel:<?php phoneNumber() ?>" class="tel-num"><?php phoneNumber() ?></a>
						</address>
					</div>
				</div>
				<div class="img-bg firstbg pc">
					<a href="#request">
						<img src="<?php echo content_url() ?>/themes/lita/assets/img/conversion_box_btn.png" srcset="<?php echo content_url() ?>/themes/lita/assets/img/conversion_box_btn@2x.png" alt="" class="conversion-btn">
					</a>
				</div>
				</div>
			</div>
      <section class="sec">
        <p class="matching__leadText fadein">
          弊社が運営する広報/ PRパーソン育成講座「PR塾」の卒業⽣を<br class="pc" />
          ご紹介するサービスです。<br />
          企業の依頼したい仕事内容に合わせて、<br />
          最も適したPRパーソンをマッチングさせていただきます。<br />
          PRのプロが低価格で<br class="pc" />
          御社のビジネスをサポートいたします。
        </p>
      </section>
			<section class="sec matching__flow">
				<div class="flow-wrapper">
					<div class="heading2-wrapper fadein">
							<h2 class="heading2">サービスの流れ</h2>
							<div class="heading2-borderbtm"></div>
						</div>
						<ul class="chart-wrapper">
							<li class="matching__chartItem fadein">
								<div class="matching__stepContents">
									<div class="matching__stepIcon">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/matching/step1.png" alt="">
									</div>
									<h3 class="matching__step">STEP <strong class="matching__stepStrong">1.</strong></h3>
									<p class="matching__stepParagraph">お申し込みフォームにご⼊⼒ください。</p>
								</div>
							</li>
							<div class="triangle fadein"></div>
							<li class="matching__chartItem fadein">
								<div class="matching__stepContents">
									<div class="matching__stepIcon">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/matching/step2.png" alt="">
									</div>
									<h3 class="matching__step">STEP <strong class="matching__stepStrong">2.</strong></h3>
									<p class="matching__stepParagraph">弊社担当者から<br />ヒアリングさせていただきます。</p>
								</div>
							</li>
							<div class="triangle fadein"></div>
							<li class="matching__chartItem fadein">
								<div class="matching__stepContents">
									<div class="matching__stepIcon">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/matching/step3.png" alt="">
									</div>
									<h3 class="matching__step">STEP <strong class="matching__stepStrong">3.</strong></h3>
									<p class="matching__stepParagraph">PRパーソンをご紹介いたします。<br />（ご納得いただきましたら契約となります）</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="sec">
				<div class="heading2-wrapper fadein">
						<h2 class="heading2">PR卒業生 一例</h2>
						<div class="heading2-borderbtm"></div>
				</div>
				<ul class="matching__graduateList">
					<li class="matching__graduateItem">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/matching/tanaka_shinichi.jpg" alt="田中伸一" class="matching__graduateImage">
						<p class="matching__graduateLead">PR未経験からNHK放送、<br class="pc" />朝日新聞・佐賀新聞・ヤフーニュースに掲載！ ブログも開始2週間で1万PV超え！</p>
						<span class="matching__graduatePosition">アクシスエボリューション代表</span>
						<p class="matching__graduateName">田中 伸一さん</p>
						<p class="matching__graduateContent">「ダウン症の息子との気付きブログ」ブログ×facebookで認知拡大！開始半月で1万PV獲得！ブログランキングが1位に。</p>
						<a href="//pr-professional.jp/post_voice/#tanaka_shinichi" class="matching__graduateButton">more ></a>
					</li>
					<li class="matching__graduateItem">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/matching/nakatani_saori.jpg" alt="中谷早織" class="matching__graduateImage">
						<p class="matching__graduateLead">テレビ・新聞・雑誌、９社のメディア掲載ゲット！18年勤務の会社を独立、PRプロデューサーに</p>
						<span class="matching__graduatePosition">「WEB×PRプロデュース」PR WEAVE代表</span>
						<p class="matching__graduateName">中谷 早織さん</p>
						<p class="matching__graduateContent">取材0件の状態からテレビ5社、新聞2社、雑誌特集4P、タウン誌、経済レポート1社の取材と放送・掲載、ヤフーニュースにも転載！</p>
						<a href="//pr-professional.jp/post_voice/#nakatani_saori-2" class="matching__graduateButton">more ></a>
					</li>
					<li class="matching__graduateItem">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/matching/hayashi_misato.jpg" alt="林美里" class="matching__graduateImage">
						<p class="matching__graduateLead">雑誌掲載・雑誌社主催のセミナー登壇・テレビ次々獲得！場所・時間を選ばないオンライン受講で成果</p>
						<span class="matching__graduatePosition">女性活躍コンサルタント</span>
						<p class="matching__graduateName">林 美里さん</p>
						<p class="matching__graduateContent">スタッフ6名とメディアアプローチを続け、福井テレビの取材・放送獲得！</p>
						<a href="//pr-professional.jp/post_voice/#hayashi_misato" class="matching__graduateButton">more ></a>
					</li>
					<li class="matching__graduateItem">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/matching/kawazu_yoshie.jpg" alt="河津良枝" class="matching__graduateImage">
						<p class="matching__graduateLead">PR塾の学びで超難関の申請突破！300万円補助金を獲得。西日本新聞掲載も！</p>
						<span class="matching__graduatePosition">有限会社カワヅオート広報担当</span>
						<p class="matching__graduateName">河津 良枝さん</p>
						<p class="matching__graduateContent">経営の見通しが立たない状態から受講後は超難関の申請突破！難しいとされていた300万円補助金を短期間で獲得！</p>
						<a href="//pr-professional.jp/post_voice/#kawazu_yoshie-2" class="matching__graduateButton">more ></a>
					</li>
				</ul>
			</section>
			<section class="sec request" id="request">
				<div class="heading2-wrapper fadein">
					<h2 class="heading2">お申し込み</h2>
					<div class="heading2-borderbtm"></div>
				</div>
				<div class="fadein">
					<?php echo do_shortcode('[contact-form-7 id="47" title="pr-contact"]'); ?>
				</div>
			</section>

			</main><!-- .main -->
		</div><!-- .content-area -->
	</div><!-- top-page -->

<?php
get_sidebar();
get_footer();
?>
