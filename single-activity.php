<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main article">
            <div class="article-wrapper">
                <div class="article-content-wrapper">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                    <div class="paging">

                    <?php if (get_previous_post()):?>
                        <!-- 前の記事がある場合にリンクを表示 -->
                        <div class="prev"><?php previous_post_link('%link','<< PREV'); ?></div>
                        <?php endif; ?>

                        <?php if (get_next_post()):?>
                            <!-- 次の記事がある場合にリンクを表示 -->
                            <div class="next"><?php next_post_link('%link','NEXT >>'); ?></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="sidebar">
                    <?php
                        global $post;
                        $args = array(
                        'numberposts' => 5, //5件表示(デフォルトは５件)
                        'post_type' => 'activity', //カスタム投稿タイプ名
                        'orderby' => 'post_date', //投稿日順番
                        'post__not_in' => array($post->ID) //表示中の記事を除外
                        );
                    ?>
                    <div class="new-article-wrapper">
                        <h4 class="new-aticle sidebar-title">新着記事</h4>
                        <ul>
                            <?php $myPosts = get_posts($args); if($myPosts) : ?>
                            <?php foreach($myPosts as $post) : setup_postdata($post); ?>
                            <li class="sidebar-article-list"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <p>関連アイテムはまだありません。</p>
                            <?php endif; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                    <!-- <div class="category-wrapper">
                        <h4 class="category sidebar-title">カテゴリー</h4>
                        <ul class="category-list">
                            <?php
                                $args = array(
                                'style'              => 'list',
                                'title_li'           => __( '' ),
                                'taxonomy'           => 'activity_cat',
                                );
                                wp_list_categories( $args );
                            ?>
                        </ul>
                    </div>category-wrapper -->
                </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
