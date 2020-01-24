<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if (! function_exists('_s_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function _s_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on _s, use a find and replace
         * to change '_s' to the name of your theme in all the template files.
         */
        load_theme_textdomain('_s', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', '_s'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('_s_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', '_s_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('_s_content_width', 640);
}
add_action('after_setup_theme', '_s_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', '_s'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', '_s'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', '_s_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function _s_scripts()
{
    wp_enqueue_script('_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', '_s_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}


/* short code */


// ページネーション
/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination($pages, $paged, $range = 2, $show_only = false)
{
    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    $text_first   = "<< 最初へ";
    $text_before  = "<< 前へ";
    $text_next    = "次へ >>";
    $text_last    = "最後へ >>";

    if ($show_only && $pages === 1) {
        // １ページのみで表示設定が true の時
        echo '<div class="pagination"><span class="current pager">1</span></div>';
        return;
    }

    if ($pages === 1) {
        return;
    }    // １ページのみで表示設定もない場合

    if (1 !== $pages) {
        //２ページ以上の時
        echo '<div class="pagination">';
        // <span class="page_num">Page ', $paged ,' of ', $pages ,'</span>';
        // if ($paged > $range + 1) {
        //     // 「最初へ」 の表示
        //     echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
        // }
        if ($paged > 1) {
            // 「前へ」 の表示
            echo '<a href="', get_pagenum_link($paged - 1) ,'" class="prev">', $text_before ,'</a>';
        }
        for ($i = 1; $i <= $pages; $i++) {
            if ($i <= $paged + $range && $i >= $paged - $range) {
                // $paged +- $range 以内であればページ番号を出力
                if ($paged === $i) {
                    echo '<span class="current pager">', $i ,'</span>';
                } else {
                    echo '<a href="', get_pagenum_link($i) ,'" class="pager">', $i ,'</a>';
                }
            }
        }
        if ($paged < $pages) {
            // 「次へ」 の表示
            echo '<a href="', get_pagenum_link($paged + 1) ,'" class="next">', $text_next ,'</a>';
        }
        // if ($paged + $range < $pages) {
        //     // 「最後へ」 の表示
        //     echo '<a href="', get_pagenum_link($pages) ,'" class="last">', $text_last ,'</a>';
        // }
        echo '</div>';
    }
}

add_action('pre_get_posts', 'my_custom_query_vars');
function my_custom_query_vars($query)
{
    /* @var $query WP_Query */
    if (!is_admin() && $query->is_main_query()) {
        if (is_post_type_archive('blog')) {
            $query->set('posts_per_page', 3);//表示したい数
        }
    }
    return $query;
}


// トップお知らせタブ
function top_cat_post_list($show_num, $cat_id)
{
    global $post;
    $args = array(
        'posts_per_page' => $show_num,
        'cat' => $cat_id,
        'post_type' => 'post',
        'no_found_rows' => true,
    );
    $myposts = get_posts($args);
    foreach ($myposts as $post) {
        setup_postdata($post); ?>
		<li class="news-list horizontal">
			<?php the_post_thumbnail(array( 100, 100 ), array( 'alt' => get_the_title() )); ?>
            <time class="day"><?php echo the_time('Y.m.d'); ?></time>
            <!-- リンクURLがある時 -->
            <?php if (post_custom('link_url')): ?>
            <a href="<?php the_field('link_url')?>" class="news-link">
            <?php endif; ?>
                <span class="news-title"><?php the_title(); ?></span>
            <?php if (post_custom('link_url')): ?>
            </a>
            <?php endif; ?>

		</li>
	<?php
    }
    wp_reset_postdata();
}

// お知らせアーカイブタブ
function announce_cat_post_list($cat_id)
{
    global $post;
    $args = array(
        'posts_per_page' => -1,
        'cat' => $cat_id,
        'post_type' => 'post',
        'no_found_rows' => true,
    );
    $myposts = get_posts($args);
    foreach ($myposts as $post) {
        setup_postdata($post); ?>
		<li class="announcement-list horizontal">
			<time class="day"><?php echo the_time('Y.m.d'); ?></time>
            <div class="title-img-wrapper">
                <?php if (post_custom('link_url')): ?>
                    <a href="<?php the_field('link_url')?>" class="article-link">
				<?php endif; ?>
                        <?php the_title(); ?>
                <?php if (post_custom('link_url')): ?>
                    </a>
                <?php endif; ?>
                <?php the_content(); ?>
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
}

/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'announcement'; //任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// コンタクトフォームメールアドレス確認
function wpcf7_main_validation_filter($result, $tag)
{
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim(strtr((string) $_POST[$name], "\n", " "));
    if ('email' == $type || 'email*' == $type) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)) {
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate($tag, "確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'][$name] = '確認用のメールアドレスが一致していません';
                }
            }
        }
    }
    return $result;
}

add_filter('wpcf7_validate_email', 'wpcf7_main_validation_filter', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_main_validation_filter', 11, 2);

// 画像パスの置き換え
function img_replace_filter($content)
{
    $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/assets/img/', $content);
    return $content;
}
add_filter('the_content', 'img_replace_filter');


// 固定ページの自動生成pタグを削除
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content)
{
    global $post;
    $remove_filter = false;
    $arr_types = array('page'); //適用させる投稿タイプを指定
    $post_type = get_post_type($post->ID);
    if (in_array($post_type, $arr_types)) {
        $remove_filter = true;
    }
    if ($remove_filter) {
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
    }
    return $content;
}

//Custom CSS Widget
add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head', 'insert_custom_css');
function custom_css_hooks()
{
    add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'post', 'normal', 'high');
    add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'page', 'normal', 'high');
}
function custom_css_input()
{
    global $post;
    echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
    echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID, '_custom_css', true).'</textarea>';
}
function save_custom_css($post_id)
{
    if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) {
        return $post_id;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    $custom_css = $_POST['custom_css'];
    update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css()
{
    if (is_page() || is_single()) {
        if (have_posts()) : while (have_posts()) : the_post();
        echo '<style type="text/css">'.get_post_meta(get_the_ID(), '_custom_css', true).'</style>';
        endwhile;
        endif;
        rewind_posts();
    }
}
wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true);

// キャッシュ対策
function file_date($filename)
{
    if (file_exists($filename)) {
        return date('Y-m-d-His', filemtime($filename));
    }
}
