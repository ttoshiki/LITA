<?php
get_header();
?>
<!--<h1>「届けよう、この夢を。」売り上げ拡大のビジネスパートナーPR会社「LITA」</h1>-->
	<div class="top-page">
		<div class="content-area">
			<main class="site-main">
				<div class="top-page__mainVisualWrapper">
					<img src="<?php echo content_url() ?>/themes/lita/assets/img/heroimg_1@2x.jpg" srcset="<?php echo content_url() ?>/themes/lita/assets/img/heroimg_1@2x.jpg 3840w, <?php echo content_url() ?>/themes/lita/assets/img/heroimg_1_sp@2x.jpg 796w" class="top-page__mainVisual">
				</div>
				<a href="/book-anouncement"><img src="<?php echo content_url() ?>/themes/lita/assets/img/mainvisual_book_info.png" alt="" class="heroimg-wrapper__bookInformation"></a>
				<section class="desc">
					<div class="news">
						<div class="news-content">
							<h3 class="heading2 fadein">NEWS</h3>
							<ul class="tab horizontal fadein">
								<li class="cat"><a href="#tab1" class="tab-link">ALL</a></li>
								<li class="cat"><a href="#tab2" class="tab-link"><?php echo get_cat_name(1); ?></a></li>
								<li class="cat"><a href="#tab3" class="tab-link"><?php echo get_cat_name(5); ?></a></li>
							</ul>
							<div class="tab-content fadein">
								<div class="tab-area" id="tab1">
									<ul>
										<?php global $post;
                                        $args = array(
                                            'post_type' => 'post',
                                            'no_found_rows' => true,
                                        );
                                        $myposts = get_posts($args);
                                        foreach ($myposts as $post) {
                                            setup_postdata($post); ?>
											<li class="news-list horizontal">
												<time class="day"><?php echo the_time('Y.m.d'); ?></time>
												<div class="title-img-wrapper">
													<a href="<?php echo get_site_url(); ?>/announcement/#<?php echo get_the_id()?>" class="news-link">
														<?php the_title(); ?>
													</a>
													<?php if (post_custom('link_url')): ?>
														<a href="<?php the_field('link_url')?>" class="news-link">
													<?php endif; ?>
													<?php if (post_custom('link_url')): ?>
														</a>
													<?php endif; ?>
												</div>
											</li>
										<?php
                                        }
                                        wp_reset_postdata();
                                        ?>
									</ul>
								</div>
								<div class="tab-area" id="tab2">
									<ul>
										<?php top_cat_post_list(5, 1); ?>
									</ul>
								</div>
								<div class="tab-area" id="tab3">
									<ul>
										<?php top_cat_post_list(5, 5); ?>
									</ul>
								</div>
							</div>
							<button onclick="location.href='/announcement'" class="news-list-btn fadein">お知らせ一覧</button>
						</div>
					</div>
				</section>
				<section class="sec desc">
					<div class="desc-wrapper">
						<div class="desc-text">
							<h2 class="heading2 fadein">売上に繋がる広報PR<br class="sp"><span class="small">をしていますか？</span></h2>
							<p class="desc fadein">
								「メディア露出経験はあるが、変化を実感できなかったからPRはやらない」<br>
								「無名のベンチャー企業だから、まだPRは早いと思いやっていない」<br>
								そんな思い込みをしていませんか？
							</p>
							<em class="catch fadein">
								PRで、会社拡大にレバレッジをかけることが可能です。<br>
								売上拡大まで見据え、広報PR戦略を行っていくことが重要です。
							</em>
						</div>
					</div>
					<div class="desc-wrapper">
						<div class="desc-text">
							<h2 class="heading2 fadein">
								<span class="small">メディア露出の数では無く、</span><br>
								<em class="strong">売上拡大に繋がる<br class="sp">情報の渦を作ること</em>
							</h2>
							<p class="desc fadein">
								10年前に比べ、1日の情報摂取量が<br class="sp">410倍以上と言われている現在。<br>
								やみくもに発信、広告を増やしても<br class="sp">埋もれてしまいます。<br>
								偶然的な単発のメディア露出のみでも、<br class="sp">変化は実感できません。
							</p>
							<em class="catch fadein" style="font-size:18px;">
								あなたとゴールを共有し、<br>
								PR×SNSの力でメディア露出から<br class="sp">口コミの渦という流れを作り、<br>
								あなたのブランドを全国区にしていく。<br class="sp">それが「LITA」の仕事です。
							</em>
						</div>
					</div>
					<div class="desc-wrapper ">
						<div class="desc-text">
							<h2 class="heading2 fadein">
								広報PRはスマホやSNSを<br class="sp">意識することで<br>
								<em class="strong">効果が何倍にも！</em>
							</h2>
							<p class="desc fadein">
								全人口がスマホを使う時代。<br class="sp">テレビで見たら、スマホで検索。<br>
								SNSで、拡散されているものを発見し、<br class="sp">スマホで検索して調べるというように、<br>
								PRもスマホ・SNS抜きには語れません。
							</p>
							<em class="catch fadein">
								SNSの拡散性を考慮した、<br>
								PR戦略で「ヒット」「話題」を作り出します。
							</em>
						</div>
					</div>
					<div class="desc-wrapper">
						<h2 class="heading2 fadein">
							スマホ時代にあった最新の広報PRを、<br>
							LITAは研究し、実践し続けています。
						</h2>
						<div class="img-wrapper fadein">
							<img src="<?php echo content_url() ?>/themes/lita/assets/img/top_catch4.jpg" alt="" class="img">
						</div>
						<ul class="text-wrapper">
							<li class="desc fadein">
								日経BP社発行ビジネス誌「日経トップリーダー」で【社長のためのSNS本質講座】11回連載。中⼩企業経営に役⽴つSNS活⽤用、PRノウハウを紹介
							</li>
							<li class="desc fadein">
								日本テレビ系列「中京テレビ」と女性のためのアカデミー企画プロデュース。SNSを中心に集客を行う新しい試みにより、1年半で900名の女性がアカデミー受講。
							</li>
							<li class="desc fadein">
								日経BP社の中小企業教材のための動画コンテンツ「GOKUU」で【SNS本質講座】講師を担当。
							</li>
							<li class="desc fadein">
								明治大学スマートキャリアプログラムで「PR/SNS講座」実施
							</li>
							<li class="desc fadein">
								経営者向け雑誌「経済界」を発行する株式会社経済界と「女性エヴァンジェリスト養成講座」長期講座を企画運営実施。女性インフルエンサーを育成。
							</li>
							<li class="desc fadein">
								大手企業A 社がメルマガ会員向けに行う「インフルエンサー養成講座」で受講者500名に対して長期間インフルエンサー育成。
							</li>
							<li class="desc fadein">
								SNS累計100万人フォロワーの”ゆうこす”こと菅本裕子さん、PRTimesとのコラボPR講義を実施。50名の女性インフルエンサーにPR指導。
							</li>
							<li class="desc fadein">
								株式会社LITA登壇 「PR講座」3年で累計1200名受講
							</li>
							<li class="desc fadein">
								株式会社LITA主催「長期講座PR塾」1期～14期満席。卒業生330名
							</li>
						</ul>
					</div>
				</section>
				<section class="book-anouncement">
					<?php get_template_part('bookAnouncement_band'); ?>
				</section>
				<section class="acitivity-wrapper">
					<img src="<?php echo content_url() ?>/themes/lita/assets/img/activity@2x.png" alt="" class="activity-img pc">
					<img src="<?php echo content_url() ?>/themes/lita/assets/img/activity_sp@2x.png" alt="" class="activity-img sp">
				</section>
				<section class="sec">
					<div class="top-achievement">
						<div class="heading2-wrapper fadein">
							<h2 class="heading2">取引実績</h2>
							<div class="heading2-borderbtm"></div>
							<p class="text">株式会社エアウィーヴ、株式会社致知出版社、株式会社日経BP、中京テレビ放送株式会社、株式会社経済界、株式会社テンポスホールディングス、ロフテー株式会社、株式会社サンマーク出版、株式会社幻冬舎、明治大学、武蔵コーポレーション株式会社、株式会社四季倶楽部旅、株式会社エスアンドケイ、株式会社インプレッションラーニング、日本高圧電気株式会社、株式会社インラビングメモリー、HAPPY WOMAN株式会社、スポーツ庁、株式会社ファニー、一般社団法人日本人グローバル化計画推進協会  JGPAA、綜合ユニコム株式会社、一般社団法人日本レジャーホテル協会、全国専修学校一般課程各種学校協会、株式会社電通国際情報サービス、ライブコマース推進委員会、株式会社サイトビジット、ピルボックスジャパン株式会社、株式会社FeelWorks 他（順不同）</p>
						</div>
					</div>
				</section>
				<section class="sec">
					<div class="heading2-wrapper fadein">
						<h2 class="heading2">SERVICE</h2>
						<div class="heading2-borderbtm"></div>
						<p class="subtitle">LITAが提供するサービス</p>
					</div>

					<ul class="service-wrapper horizontal">
						<li class="service-list fadein">
							<div class="service">
								<h3 class="heading3 yumincho">PR代行</h3>
								<img src="<?php echo content_url() ?>/themes/lita/assets/img/service_pr_agent.jpg" alt="" class="service-img">
								<div class="body-wrapper">
									<h4 class="heading4">結果に繋げるプロのPR</h4>
									<p class="service-text">PRは売り上げを1→100にする力がある。クライアントと伴走しながら、二人三脚で結果にコミットします。</p>
								</div>
								<button class="detail" onclick="location.href='/service-list'">詳細</button>
							</div>
						</li>
						<li class="service-list fadein">
							<div class="service">
								<h3 class="heading3 yumincho">PR塾<br class="sp"><span style="font-size: 0.4em;letter-spacing: 0;">-PRプロフェッショナル講座-</span></h3>
								<img src="<?php echo content_url() ?>/themes/lita/assets/img/service_pr_school.jpg" alt="" class="service-img">
								<div class="body-wrapper">
									<h4 class="heading4">PRスペシャリスト<br class="pc">330名輩出</h4>
									<p class="service-text">
										PRスキルを習得し、自社の力で認知拡大を目指しましょう。PR設計、メディア掲載、SNSコミュニケーションを3ヶ月で徹底習得。
									</p>
								</div>
								<button class="detail" onclick="window.open('https://pr-professional.jp/pr-learn/')">詳細</button>
							</div>
						</li>

					</ul>
				</section>
				<section class="sec">
					<div class="top-about">
						<div class="about-text-wrapper">
							<h2 class="heading2 fadein"><em class="strong">LITA</em>とは</h2>
							<div class="fadein">
								<p class="desc">
									会社名のLITAは、<br>
									漢字で表すと、「利他」となります。<br>
									利他とは、自己の利益よりも他者の利益を優先すること。
								</p>
								<p class="desc">
									人や企業。世の中のことを思いやる心。<br>
									心が繋がらないと、奇跡がおきません。
								</p>
								<em class="desc emphasis">
									ＰＲという魔法を使い、<br>
									多くの素敵な企業様にお手伝いをし、<br>
									一緒に感動を味わいたい。
								</em>
								<p class="desc">
									「お客様への貢献」＝感動なくして、利益なし<br>
									利益よりお客様への貢献を優先する
								</p>
								<p class="desc">
									その想いを込めて、利他　＝ＬＩＴＡ　という会社名にいたしました。<br>
									お客様への貢献を突き通していきたいと思っております。
								</p>
							</div>
						</div>
					</div>
				</section>
				<section class="sec column">
					<div class="heading2-wrapper fadein">
						<h2 class="heading2">PR Column</h2>
						<div class="heading2-borderbtm"></div>
						<p class="subtitle">
							読むだけでPR力がつく<br>
							現役PR会社による最新コラム
						</p>
					</div>
					<div class="article-main-wrapper without-pagination fadein">
						<article class="article-list-wrapper">
								<ul class="article-list">
									<?php $args = array(
                                        'numberposts' => 6, //表示する記事の数
                                        'post_type' => 'column' //投稿タイプ名
                                    );
                                    $customPosts = get_posts($args);
                                    if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                                    ?>
									<li class="article">
										<a href="<?php the_permalink(); ?>">
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

									<?php endforeach; ?>
									<?php else : //記事が無い場合?>
									<p>Sorry, no posts matched your criteria.</p>
									<?php endif;
                                    wp_reset_postdata(); ?>
								</ul>
						</article>
						<button onclick="location.href='/column'" class="clm fadein">>> コラム一覧</button>
					</div>
				</section>
				<?php get_template_part('mailMagazine-btn'); ?>
				<?php get_template_part('bookPresentPlanning'); ?>
			</main>
		</div><!-- .content-area -->
	</div><!-- top-page -->

<?php
get_sidebar();
get_footer();
