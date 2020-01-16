<!-- お知らせ一覧のアーカイブ -->
<?php
get_header();
?>
<head>
	<meta name="description" content="LITAの活動実績となるメディアやニュース記事など、過去から最新の情報までご確認頂けます。メディアでの活躍とLITA自身の活動を是非ご覧ください。">
</head>
	<div class="snsVoice">
		<div class="content-area">
			<main class="site-main">
				<section class="announcement">
					<div class="heading2-wrapper fadein">
						<h2 class="heading2">SNS口コミ</h2>
						<div class="heading2-borderbtm"></div>
					</div>
                    <h3 class="snsVoice__leadText fadein">ご投稿いただいた<br class="sp">口コミを更新しています</h3>
                    <div class="snsVoice__logoWrapper fadein">
                        <img src="<?php echo content_url() ?>/themes/lita/assets/img/facebook_logo.svg" alt="" class="snsVoice__logo">
                        <img src="<?php echo content_url() ?>/themes/lita/assets/img/twitter_logo.svg" alt="" class="snsVoice__logo">
                        <img src="<?php echo content_url() ?>/themes/lita/assets/img/instagram_logo.svg" alt="" class="snsVoice__logo">
                    </div>
                    <article class="snsVoice__article fadein">
                        <ul>
                            <?php global $post;
                            $args = array(
                                'post_type' => 'sns_voice',
                                'no_found_rows' => true,
                                'posts_per_page' => -1,
                            );
                            $myposts = get_posts($args);
                            foreach ($myposts as $post) {
                                setup_postdata($post); ?>
                                <li class="snsVoice__item">
                                    <?php the_content(); ?>
                                </li>
                            <?php
                            }
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </article>
				</section>
			</main>
		</div>
	</div>
<?php
get_sidebar();
get_footer();
