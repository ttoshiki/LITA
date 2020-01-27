<?php
get_header();
?>

<main class="bookAnouncement">
    <h1 class="bookAnouncement__title"><?php the_title(); ?></h1>
    <p class="bookAnouncement__subtitle">弊社代表取締役社長 笹木郁乃が<br />日経BP社さまより<br class="sp" />書籍を出版いたしました。</p>
    <h2 class="bookAnouncement__strong">発売5日で即、重版決定！</h2>
    <img src="<?php echo content_url() ?>/themes/lita/assets/img/amazon_ranking.png" alt="amazonランキング各部門1位を獲得" class="bookAnouncement__ranking">
    <section>
        <h2 class="bookAnouncement__mainHeading">なぜエアウィーヴは<br />浅田真央さんに選ばれたのか――？</h2>
        <p class="bookAnouncement__text">
            第１号正社員として、5年で売上高115倍に貢献した著者が、<br class="pc" />
            ロジカルでシンプルな、セオリーとノウハウを説き明かします。<br class="pc" />
            満員御礼「ＰＲ塾」のエッセンスを、ぎゅっと詰めこみました。</p>
    </section>
    <img src="<?php echo content_url() ?>/themes/lita/assets/img/book_front_shadow_rightBottom.png" alt="" class="bookAnouncement__bookCover">
    <section>
        <h2 class="bookAnouncement__heading">【内容】</h2>
        <dl class="bookAnouncement__contentsWrapper">
            <dt class="bookAnouncement__contentsHeading">◎はじめに</dt>
            <dd class="bookAnouncement__contents">なぜエアウィーヴは浅田真央さんに選ばれたのか？</dd>
            <dt class="bookAnouncement__contentsHeading">Lesson1</dt>
            <dd class="bookAnouncement__contents">有料広告の前に「0円から始めるPR」の時代</dd>
            <dt class="bookAnouncement__contentsHeading">Lesson2</dt>
            <dd class="bookAnouncement__contents">売れるストーリーは「変化＋景色」</dd>
            <dt class="bookAnouncement__contentsHeading">Lesson3</dt>
            <dd class="bookAnouncement__contents">ツイッターにFB、インスタ、何がどう違う？</dd>
            <dt class="bookAnouncement__contentsHeading">Lesson4</dt>
            <dd class="bookAnouncement__contents">反響が反響を呼ぶ「段階的プロモーション」を目指そう</dd>
            <dt class="bookAnouncement__contentsHeading">Lesson5</dt>
            <dd class="bookAnouncement__contents">忙しい人のSNSは「FBだけ」でいい</dd>
            <dt class="bookAnouncement__contentsHeading">Lesson6</dt>
            <dd class="bookAnouncement__contents">侮れない基本ツール！自己紹介資料のABC</dd>
            <dt class="bookAnouncement__contentsHeading">Lesson7</dt>
            <dd class="bookAnouncement__contents">もしもテレビに出たいなら？ 地道な努力が意外に効く</dd>
            <dt class="bookAnouncement__contentsHeading">Lesson8</dt>
            <dd class="bookAnouncement__contents">これが王道！ 既存顧客の熱烈ファン化</dd>
        </dl>
        <div class="bookAnouncement__message">
            <hr class="bookAnouncement__divider" />
            <p class="bookAnouncement__text">
                ＰＲのスキルがあれば、<br />
                お金をかけずに、<br />
                顧客に愛され、<br />
                売上を伸ばしていける。
            </p>
            <p class="bookAnouncement__text">熱いメッセージをこめて、実践的に展開します。</p>
            <hr class="bookAnouncement__divider" />
        </div>
        <p class="bookAnouncement__text">
            Amazon及び全国書店にて好評発売中。</p>
        <p class="bookAnouncement__text amazonUrl">
            【Amazon販売ページ】<br />
            <a href="https://www.amazon.co.jp/%E3%82%BC%E3%83%AD%E5%86%86%EF%BC%B0%EF%BC%B2-%E7%AC%B9%E6%9C%A8%E9%83%81%E4%B9%83/dp/4296104926/ref=mp_s_a_1_1?keywords=%E7%AC%B9%E6%9C%A8%E9%83%81%E4%B9%83&qid=1576144796&sr=8-1
" class="bookAnouncement__link">www.amazon.co.jp/dp/4296104926</a>
        </p>
        <em class="bookAnouncement__emphasis">是非、お手に取ってご覧ください。</em>
        <small class="bookAnouncement__bookInfo">出版社：日経BP社</small>
        <small class="bookAnouncement__bookInfo">書籍名：0円PR お金をかけずに顧客に愛されて売上を伸ばす方法</small>
        <small class="bookAnouncement__bookInfo">著者：笹木郁乃</small>
    </section>
    <section class="bookAnouncement__contact">
        <h3 class="bookAnouncement__contactHeading">＜本件に関する問い合わせ＞</h3>
        <address class="bookAnouncement__companyInfo">株式会社LITA</address>
        <address class="bookAnouncement__companyInfo">TEL：<?php phoneNumber() ?> / <br class="sp" /> FAX：03-6684-4399</address>
        <address class="bookAnouncement__companyInfo">E-mail: info@lita-pr.com</address>
    </section>
    <?php get_template_part('bookPresentPlanning'); ?>
</main>

<?php
get_sidebar();
get_footer();
