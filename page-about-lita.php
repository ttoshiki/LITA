<?php
get_header();
?>

<div class="page-about-lita">
    <div class="header-img-wrapper">
        <img src="<?php echo content_url() ?>/themes/lita/assets/img/about_lita_header_img.jpg" alt="" class="header-img pc" width="1440" hegiht="250">
        <img src="<?php echo content_url() ?>/themes/lita/assets/img/about_lita_header_img_sp.jpg" alt="" class="header-img sp" width="1440" hegiht="250">
        <h1 class="heading1 fadein">
            <em class="strong">LITA</em>とは
        </h1>
    </div>
    <div class="content-area">
        <main class="about-lita-wrapper">
            <section class="sec vision">
                <div class="vision-wrapper">
                    <div class="heading2-wrapper fadein">
                            <h2 class="heading2" id="vision">企業理念</h2>
                    </div>
                    <h3 class="about-lita__heading3 fadein">自ら輝き、世界を照らす。</h3>
                    <i class="about-lita__headingEn fadein -en">Shine, to make the world a brighter place.</i>
                    <p class="desc fadein">
                        一人一人が光っていこう。<br />
                        そして、お客様や周りに更なる輝きを。<br />
                        最後には、世の中全体に、<br class="sp">大きな輝きを作ろう。
                    </p>
                    <p class="desc fadein">
                        LITAの光は、最初は1つから。<br />
                        百の光を目指そう。<br class="sp">千の光。万の光を作っていこう。
                    </p>
                </div>
            </section>

            <section class="sec">
                <div class="principle">
                    <div class="heading2-wrapper fadein">
                        <h2 class="heading2" id="vision">行動指針</h2>
                    </div>
                    <div class="principle__paragraphs fadein">
                        <p class="principle__paragraph"><b class="principle__en -en">Soulful</b>に、お客様の夢を一緒に目指す。</p>
                        <p class="principle__paragraph"><b class="principle__en -en">Powerful</b>に、結果に向けた行動を重ねる。</p>
                        <p class="principle__paragraph"><b class="principle__en -en">Joyful</b>な、人とビジネスの関係を作っていく。</p>
                    </div>
                    <h3 class="principle__heading3 fadein">チームLITA</h3>
                    <p class="principle__text fadein">私たちは常に、利他の心を体現していきます。</p>
                </div>
            </section>

            <section class="sec overview">
                <div class="company-overview">
                    <div class="heading2-wrapper fadein">
                            <h2 class="heading2 pagelink__target" id="company-overview">会社概要</h2>
                            <div class="heading2-borderbtm"></div>
                    </div>
                    <table class="table-wrapper fadein">
                        <tr>
                            <td class="heading">会社名</td>
                            <td class="desc">株式会社LITA</td>
                        </tr>
                        <tr>
                            <td class="heading">本拠地</td>
                            <td class="desc">〒113-0034 東京都文京区湯島1-7-9お茶の水ウチヤマビル6F</td>
                        </tr>
                        <tr>
                            <td class="heading">資本金</td>
                            <td class="desc">1,000万円</td>
                        </tr>
                        <tr>
                            <td class="heading">代表者</td>
                            <td class="desc">笹木 郁乃</td>
                        </tr>
                        <tr>
                            <td class="heading">役員</td>
                            <td class="desc">井上 俊彦</td>
                        </tr>
                        <tr>
                            <td class="heading">事業内容</td>
                            <td class="desc">PR代行、PR講座主宰</td>
                        </tr>
                        <tr>
                            <td class="heading">設立</td>
                            <td class="desc">2017年2月</td>
                        </tr>
                        <tr>
                            <td class="heading">スタッフ数</td>
                            <td class="desc">7名</td>
                        </tr>
                        <tr>
                            <td class="heading">TEL</td>
                            <td class="desc"><?php phoneNumber(); ?></td>
                        </tr>
                        <tr>
                            <td class="heading">FAX</td>
                            <td class="desc">03-6684-4399</td>
                        </tr>
						<tr>
                            <td class="heading">関連会社</td>
                            <td class="desc"><a href="https://pr-professional.jp/" target="_blank">一般社団法人PRプロフェッショナル協会<br class="sp">（PR講座主宰）</a></td>
                        </tr>
                    </table>
                </div>
            </section>
            <picture class="about-lita__picture">
			    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team_lita02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/team_lita02.jpg 1x <?php echo get_template_directory_uri(); ?>/assets/img/team_lita02@2x.jpg 2x" alt="LITA社員集合写真" class="fadein">
			</picture>
            <section>
                <div class="heading2-wrapper fadein">
                    <h2 class="heading2 pagelink__target" id="president-introduction">代表紹介</h2>
                    <div class="heading2-borderbtm"></div>
                </div>
                <div class="president-wrapper horizontal fadein">
                    <img src="<?php echo content_url() ?>/themes/lita/assets/img/president_img.jpg" alt="笹木 郁乃" class="president-img pc" width="450" height="726">
                    <img src="<?php echo content_url() ?>/themes/lita/assets/img/president_img-sp.jpg" alt="笹木 郁乃" class="president-img sp" width="375" height="422">
                    <div class="text">
                        <div class="position-name-wrapper">
                            <a href="/book-anouncement" class="bookInformation">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/book_front_shadow.png" alt="0円PR" class="book__image">
                                <div class="bookInformation__text">
                                    <h2 class="bookInformation__title">著書<br />「０円PR」</h2>
                                    <i class="bookInformation__publisher">（日経BP社）</i>
                                </div>
                            </a>
                            <span class="position">
                                株式会社LITA 代表取締役<br>
                                PRプロデューサー
                            </span>
                            <em class="president-name">笹木郁乃</em>
                        </div>
                        <div class="desc-wrapper">
                            <p class="desc">
                                PR事業に携わり、10年。
                            </p>
                            <p class="desc">
                                会社員時代、創業期2社のPRを担当。<br>
                                株式会社エアウィーヴ 5年で1億→120億<br>
                                愛知トビー株式会社（バーミキュラ製造販売）2年で11億→44億<br>と、PRの力で急成長に貢献。
                            </p>
                            <p class="desc">
                                その後、企業価値にPRの力を加えることで、会社が劇的に変化するということを多くの経営者に伝えるべく、PR代行事業を立ち上げる。また、自身の10年間のPR経験より構築した独自のPR理論をコンンテンツとするPR塾を主宰。延べ330人以上の起業家、経営者、PR担当者にPRを指導、14期連続満席にて開催。
                            </p>
                            <p class="desc">
                                その他企業主催の講座やイベント等にもPR講師として登壇、3年で1200名以上の起業家・経営者に指導。大手上場企業等PR案件を多数抱える他、複数のメディアでPRコラムを執筆中。
                            </p>
                            <p class="desc">
                                素晴らしい商品やサービスを持つ多くの企業が、世の中から認知されず、多大な広告費やPR費を必要としている現状を打破し、全ての企業がPRの力を当たり前に使えるよう、業界の変革に取り組んでいる。
                            </p>
                            <p class="desc">
                                「PRは魔法であり、劇的に会社を変える力がある」が持論。
                            </p>
                            <p class="desc">
                                2019年12月、日経BP社より著書「0円PR」が発売。
                            </p>
                        </div><!-- desc-wrapper -->
                    </div><!-- text -->
                </div><!-- horizontal -->
            </section>
            <section class="book-anouncement sp">
                <?php get_template_part('bookAnouncement_band'); ?>
            </section>
            <section class="sec banner-area horizontal fadein">
                <a href="/blog" class="banner-link"><img src="<?php echo content_url() ?>/themes/lita/assets/img/blog_banner.jpg" alt="president_blog" class="banner"></a>
                <a href="https://www.facebook.com/PRikunosasaki" class="banner-link"><img src="<?php echo content_url() ?>/themes/lita/assets/img/fb_banner.jpg" alt="facebook_banner" class="banner"></a>
            </section>

            <section class="sec biography">
                <div class="heading2-wrapper fadein">
                    <h2 class="heading2" id="president-bio">代表略歴</h2>
                    <div class="heading2-borderbtm"></div>
                </div>
                <div class="biography-wrapper fadein">
                    <img src="<?php echo content_url() ?>/themes/lita/assets/img/president_biography.png" alt="president_blog" class="img-biography pc">
                    <img src="<?php echo content_url() ?>/themes/lita/assets/img/president_biography_sp.png" alt="president_blog" class="img-biography sp">
                </div>
            </section>



            <section class="sec">
                <div class="heading2-wrapper fadein">
                    <h2 class="heading2" id="story">LITA設立までの<br class="sp">ストーリー</h2>
                    <div class="heading2-borderbtm"></div>
                </div>
                <div class="biography-wrapper">
                    <!-- <button class="show-way-button" type="button">LITA設立までの道のり</button> -->

                    <!-- PCの時だけ表示 -->
                    <?php if (!wp_is_mobile()): ?>
                    <div class="way-wrapper">
                        <article class="article fadein">
                            <div class="text-wrapper">
                                <h3 class="heading3">なぜ最初は自動車研究開発者になったのか。</h3>
                                <span class="subtitle">〜漠然と感じていた、社会貢献への想い〜</span>
                                <p class="text">
                                   私は宮城県仙台市の4人兄弟の次女として育ちました。小学生低学年の頃、交通事故に合い、脳の大きな手術をすることになりました。「２０歳までに後遺症が出るかもしれない」と言われ、死の恐怖と向き合う中で「いつ死んでも後悔しない人生を生きたい！」と強く意識するようになりました。
                                </p>
                                <p class="text">
                                    そんな情熱を持ちながらも、それをかける大きな夢はなかなか見つからないままに高校を卒業。数学が得意だったことから山形大学理学部数学科に入学しました。なんとかここで自分を生かす道を見つけたいと思いましたが、定理を追求する数学科の学びに、社会への直接的な貢献を見いだせず悶々とする日々。そんな時、工学部の講義を受ける機会があり、衝撃を受けました。それは洗濯機の製造に関する授業だったのですが、自分の得意な理系分野の知識を、人々の生活に生かし、社会に貢献できるものはこれだ！と感じました。自分の情熱を傾けるものが見つかったと思いました。
                                </p>
                                <p class="desc">
                                    「これこそが自分のやりたいことだ」と、早速理学部から工学部への転部を学校に交渉しました。これまでに前例がないと始めは断られてしまったのですが、何としてもやりたいとの熱意を学校側へ訴え、学校初の理学部から工学部への転部が認められました。
                                </p>
                                <p class="desc">
                                    転部してからは、自分の知識を使って人の役に立つモノが作れる工学部の学びに大きな意義を感じ、せっかくの与えられたチャンスを生かそうと、首席で卒業することを自分の目標にしました。その後大学代表として日本機械学会畠山賞を受賞し、首席で卒業することができたことは、今まで何も成し遂げられないと思っていた自分への自信となりました。卒業後は、工学部の知識を活かし、トヨタ自動車部品メーカー「アイシン精機株式会社」の設計エンジニアとして入社することが決まりました。
                                </p>
                            </div>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story1.jpg" alt="">
                            </div>
                        </article>
                        <article class="article fadein">
                            <div class="text-wrapper">
                                <h3 class="heading3">なぜ研究職から、PR職へ転職したのか？</h3>
                                <span class="subtitle">〜首席卒業からエンジニアとしての挫折、PRとの出合い〜</span>
                                <p class="text">
                                    アイシン精機株式会社への入社が決まり、初めて東北を出て、愛知で働き始めました。しかし、入ってみると、周囲は優秀な人ばかり。社会に貢献すると意気込んでいた私は、大学の学びと実際の研究職に求められるスキルの差に愕然としました。自分にはエンジニアとしての才能がなかったのか…。人生の全てをこれにかける決意で入社したはずが、自分の不甲斐なさに落ち込み、「自分は、こんなに価値のない人間だったんだ」と大きな挫折を味わうことになりました。私は再び目標を見失ってしまいました。
                                </p>
                                <p class="text">
                                    そんなある日、たまたま入った本屋で、バレーボールの故横山友美佳選手の著書、「明日もまた生きていこう 十八歳でがん宣告を受けた私」（マガジンハウス発行）を手に取りました。やりたいことがあるのに、命が失われる、その無念さに涙がとまりませんでした。せっかく助かった命。今健康な自分が、このように落ち込んでいる場合ではない、と奮起しました。「エンジニアは自分の天職ではないかもしれないけれど、他にきっと私にも天職があるはず」と、理系人生は捨てることを決意。一念発起で転職活動を始めました。これが、人生の大きな転機であり、今につながる決断となりました。
                                </p>
                                <p class="text">
                                    やるからには、これまでの大企業のような大勢の中の一人になるのではなく、会社の成長に貢献できる小さな小さなベンチャー企業に光を灯したい。そして、人の役に立つことが実感できるような会社で働きたいと思いました。しかし、未経験の私は何社も転職活動に落ち続け、最後の最後に、ある立ち上げ直後の会社の面接を受けました。創業間もない株式会社エアウィーヴです。面接官として来られた高岡社長に、会社と製品について小一時間も熱く語っていただきました。<br>
                                    また、そのマットレスが広がると世の中の睡眠の質があがり人々が幸せになると確信し、入社を決意しました。私は初代社員として採用され、社長直下で、営業、PR、マーケティングと未経験な業種を幅広く担当することになりました。これが、PRとの思わぬ出合いとなりました。
                                </p>
                            </div>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story2.jpg" alt="">
                            </div>
                        </article>
                        <article class="article fadein">
                            <div class="text-wrapper">
                                <h3 class="heading3">エアウィーヴに入ってどうでしたか？</h3>
                                <span class="subtitle">〜　がむしゃらに挑戦！<br>年商１億円から5年後120億円への急成長を経験　〜</span>
                                <p class="text">
                                    転職後、始めのうちはPRが好きというより、「社長の夢を叶えたい」、「会社を大きくしたい」という目標から、夢中で働き続けました。商品には自信があったのですが、無名のマットレスの良さを理解してもらうことは非常に難しくマットレスが1日に1枚売れるかどうかという状態。工場は暇を持て余し、スタッフは草むしりをする日々でした。
                                </p>
                                <p class="text">
                                    そんな日々の中で、少しずつ努力が報われ、浅田真央さんを始め、一流選手や一流旅館など試してくださった方から寝心地を評価いただき、採用に繋がるようになりました。また、PR活動では、電話帳を調べてメディアにも端から連絡していきました。無名の会社だったため、アポイントを取ることは簡単ではなく、直ぐに切られてしまうことも何度もありました。しかし、アタックを続けていると、遂にある時、地元愛知県のテレビ局で取材していただけることが決まりました。そして、待ちに待った放送直後には、番組を見た視聴者から問い合わせの電話が鳴りやまない状態になりました。
                                </p>
                                <p class="text">
                                    これらのPRで、メディア露出が増えたことも貢献し、入社時年商1億弱、従業員5名だったエアウィーヴは、5年後年商120億円以上、従業員400名へと急成長しました。小さな会社が「PR」の力で飛躍することを経験し、「PRというのは魔法なんだ、会社のみんなを幸せにすることができるんだ」という思いから、「PR」の魅力にすっかり取り憑かれるようになりました。
                                </p>
                            </div>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story3.jpg" alt="">
                            </div>
                        </article>
                        <article class="article fadein">
                            <div class="text-wrapper">
                                <h3 class="heading3">なぜまた、転職をしたのですか？</h3>
                                <span class="subtitle">
                                    〜 第2の転職<br>
                                    もう一度ベンチャー企業への成長にPRで関わりたい ~
                                </span>
                                <p class="text">
                                    エアウィーヴが大きくなり、PR部門に後輩も育っていたので、再び小規模なベンチャー企業で挑戦する道を選びたいと思うようになりました。子供が1歳の時でしたが、愛知県の町工場、「バーミキュラ」という鍋製造販売の愛知ドビー株式会社への転職を決めました。転職後はPR・マーケティング職として勤務し、まずは実績作りのためにシェフや料理研究家にアプローチしました。メディアに対しては、メディアごとに「刺さるポイント」を意識して資料を作り変え、また地道なアプローチを開始しました。
                                </p>
                                <p class="text">
                                    このようなPR活動により、メディア露出は増えていったのですが、なかなか売り上げには結びつきませんでした。それでもPRの種をこつこつと蒔き続け実績を増やし続けた結果、　2週連続でゴールデンの時間帯にテレビ番組で取り上げてもらえることになり、いきなり火が付いたように売れ始めました。あっという間に在庫がなくなり、バーミキュラは1年待ちの人気商品となりました。その後愛知ドビーは2年で11億円から44億円に成長していきました。
                                </p>
                            </div>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story4.jpg" alt="">
                            </div>
                        </article>
                        <article class="article fadein">
                            <div class="text-wrapper">
                                <h3 class="heading3">なぜ独立したのですか？</h3>
                                <span class="subtitle">〜起業。PR会社としての挑戦　PRで世の中に感動を〜</span>
                                <p class="text">
                                    私はPRの仕事が好きで、もっと挑戦したい、もっと企業に、世の中に貢献したいと強く感じていました。しかし、会社の中では挑戦できる限界があることと、挑戦しながらも子育ても自分なりにコントロールして両立したい思いから、起業を決意しました。これまでに起業を考えたことはなく、あったのは「人の役に立ちたい」という想いだけでした。</p>
                                <p class="text">
                                    なんとか自分でできることはないか考えたとき、フェイスブックやブログなど、SNSで認知を広げ、フリーランスで働く女性たちが目に留まりました。これなら元手もいらず、自分でもPRで、必要とする方のお役に立てるかもしれないと思い、さっそくブログを書き、SNSの投稿を始めました。自分の存在を知ってもらうため、必死にSNSを更新しました。初めてのお客様は、そんな私のブログを読んでくださった読者の方でした。
                                </p>
                                <p class="text">
                                    PRのコンサルティングを始めた当初は、とにかく実績を作ることを目標に、無料で行っていました。しかし、お客様の口コミや、頂いたご感想を更にSNSで紹介することを繰り返しているうちに徐々に認知が広がり、お客様の数が増えていきました。個別対応では追い付かなくなり、講義形式の「PR塾」という形を取るようになりました。PR塾は期を重ねるごとにお客様のステージも変わって行き、全国から起業家、経営者、PR担当者が受講くださるまでに成長しました。2019年4月14期まですべて満席で開講することができ、3年間で長期講座卒業生は約330名。PRセミナー等でPRをお伝えした累計は、1200人を超えました。
                                </p>
                            </div>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story5.jpg" alt="">
                            </div>
                        </article>
                        <article class="article fadein">
                            <div class="text-wrapper">
                                <h3 class="heading3">なぜ、会社名をikunoPRからLITAへ変更したのですか？</h3>
                                <span class="subtitle">
                                    利他の心・PRで世界に大きな感動を〜<br>
                                   〜起業家から、経営者・組織化へ。
                                </span>
                                <p class="text">
                                </p>
                                <p class="text">
                                    PR塾に反響をいただく中で、私自身にも企業PRの案件をお声がけくださる方が増え、PRの需要の大きさを日に日に感じるようになりました。情報が溢れる現代社会では、広告の効果はどんどん薄れ、SNSやPRがますます台頭していると実感してきています。これからは、PRノウハウを教えることだけでなく、世の中に大きな感動を巻き起こす、自社自体でイノベーションを起こしたいと考え、企業との仕事を増やしていくことを決意しました。
                                </p>
                                <p class="text">
                                    次第に案件の数も増え、多様になっていく中で、これからはチームの力で大きなことを成し遂げたいという想いが強くなりました。それは、起業してからの3年で、私は完璧な人間ではないということを知ると共に、チームでのPRサポートで結果が出ることを何度も体験したからです。私一人では、できないところ、足りないところがたくさんあります。そんな自分が、より大きな感動を作り、社会へ貢献して行くためには、1人ではなく組織を作り、拡大していくことが必要なのだと心を決めました。
                                </p>
                                <p class="text">
                                    2019年4月、会社名を株式会社LITA（利他）とし、初めての社員採用を開始、組織化を進めています。社名LITA＝利他とは、自分の利益よりも、人や企業、世の中のことを思いやる心です。PRも、仕事も、利他の心が無いと、成功しないと感じています。利他の経営・仕事・PRを通し、世の中に大きな感動をもたらすPR会社として、これからも挑戦していきます。
                                </p>
                            </div>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story6.jpg" alt="">
                            </div>
                        </article>
                    </div>
                    <?php endif; ?>

                        <!-- モバイルの時だけ表示 -->
                    <?php if (wp_is_mobile()): ?>
                    <div class="way-wrapper sp">
                        <article class="article fadein">
                            <h3 class="heading3">なぜ最初は自動車研究開発者になったのか。</h3>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story1.jpg" alt="">
                            </div>
                            <span class="subtitle">〜漠然と感じていた、社会貢献への想い〜</span>
                            <p class="text">
                                私は宮城県仙台市の4人兄弟の次女として育ちました。小学生低学年の頃、交通事故に合い、脳の大きな手術をすることになりました。「２０歳までに後遺症が出るかもしれない」と言われ、死の恐怖と向き合う中で「いつ死んでも後悔しない人生を生きたい！」と強く意識するようになりました。
                            </p>
                            <p class="text">
                                そんな情熱を持ちながらも、それをかける大きな夢はなかなか見つからないままに高校を卒業。数学が得意だったことから山形大学理学部数学科に入学しました。なんとかここで自分を生かす道を見つけたいと思いましたが、定理を追求する数学科の学びに、社会への直接的な貢献を見いだせず悶々とする日々。そんな時、工学部の講義を受ける機会があり、衝撃を受けました。それは洗濯機の製造に関する授業だったのですが、自分の得意な理系分野の知識を、人々の生活に生かし、社会に貢献できるものはこれだ！と感じました。自分の情熱を傾けるものが見つかったと思いました。
                            </p>
                            <p class="text">
                                「これこそが自分のやりたいことだ」と、早速理学部から工学部への転部を学校に交渉しました。これまでに前例がないと始めは断られてしまったのですが、何としてもやりたいとの熱意を学校側へ訴え、学校初の理学部から工学部への転部が認められました。
                            </p>
                            <p class="text">
                                転部してからは、自分の知識を使って人の役に立つモノが作れる工学部の学びに大きな意義を感じ、せっかくの与えられたチャンスを生かそうと、首席で卒業することを自分の目標にしました。その後大学代表として日本機械学会畠山賞を受賞し、首席で卒業することができたことは、今まで何も成し遂げられないと思っていた自分への自信となりました。卒業後は、工学部の知識を活かし、トヨタ自動車部品メーカー「アイシン精機株式会社」の設計エンジニアとして入社することが決まりました。
                            </p>
                        </article>
                        <article class="article fadein">
                            <h3 class="heading3">なぜ研究職から、PR職へ転職したのか？</h3>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story2.jpg" alt="">
                            </div>
                            <span class="subtitle">〜首席卒業からエンジニアとしての挫折、PRとの出合い〜</span>
                            <p class="text">
                                アイシン精機株式会社への入社が決まり、初めて東北を出て、愛知で働き始めました。しかし、入ってみると、周囲は優秀な人ばかり。社会に貢献すると意気込んでいた私は、大学の学びと実際の研究職に求められるスキルの差に愕然としました。自分にはエンジニアとしての才能がなかったのか…。人生の全てをこれにかける決意で入社したはずが、自分の不甲斐なさに落ち込み、「自分は、こんなに価値のない人間だったんだ」と大きな挫折を味わうことになりました。私は再び目標を見失ってしまいました。
                            </p>
                            <p class="text">
                                そんなある日、たまたま入った本屋で、バレーボールの故横山友美佳選手の著書、「明日もまた生きていこう 十八歳でがん宣告を受けた私」（マガジンハウス発行）を手に取りました。やりたいことがあるのに、命が失われる、その無念さに涙がとまりませんでした。せっかく助かった命。今健康な自分が、このように落ち込んでいる場合ではない、と奮起しました。「エンジニアは自分の天職ではないかもしれないけれど、他にきっと私にも天職があるはず」と、理系人生は捨てることを決意。一念発起で転職活動を始めました。これが、人生の大きな転機であり、今につながる決断となりました。
                            </p>
                            <p class="text">
                                やるからには、これまでの大企業のような大勢の中の一人になるのではなく、会社の成長に貢献できる小さな小さなベンチャー企業に光を灯したい。そして、人の役に立つことが実感できるような会社で働きたいと思いました。しかし、未経験の私は何社も転職活動に落ち続け、最後の最後に、ある立ち上げ直後の会社の面接を受けました。創業間もない株式会社エアウィーヴです。面接官として来られた高岡社長に、会社と製品について小一時間も熱く語っていただきました。<br>
                                また、そのマットレスが広がると世の中の睡眠の質があがり人々が幸せになると確信し、入社を決意しました。私は初代社員として採用され、社長直下で、営業、PR、マーケティングと未経験な業種を幅広く担当することになりました。これが、PRとの思わぬ出合いとなりました。
                            </p>
                        </article>
                        <article class="article fadein">
                            <h3 class="heading3">エアウィーヴに入ってどうでしたか？</h3>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story3.jpg" alt="">
                            </div>
                            <span class="subtitle">
                                〜　がむしゃらに挑戦！<br>
                                年商１億円から5年後120億円への急成長を経験　〜
                            </span>
                            <p class="text">
                                転職後、始めのうちはPRが好きというより、「社長の夢を叶えたい」、「会社を大きくしたい」という目標から、夢中で働き続けました。商品には自信があったのですが、無名のマットレスの良さを理解してもらうことは非常に難しくマットレスが1日に1枚売れるかどうかという状態。工場は暇を持て余し、スタッフは草むしりをする日々でした。
                            </p>
                            <p class="text">
                                そんな日々の中で、少しずつ努力が報われ、浅田真央さんを始め、一流選手や一流旅館など試してくださった方から寝心地を評価いただき、採用に繋がるようになりました。また、PR活動では、電話帳を調べてメディアにも端から連絡していきました。無名の会社だったため、アポイントを取ることは簡単ではなく、直ぐに切られてしまうことも何度もありました。しかし、アタックを続けていると、遂にある時、地元愛知県のテレビ局で取材していただけることが決まりました。そして、待ちに待った放送直後には、番組を見た視聴者から問い合わせの電話が鳴りやまない状態になりました。
                            </p>
                            <p class="text">
                                これらのPRで、メディア露出が増えたことも貢献し、入社時年商1億弱、従業員5名だったエアウィーヴは、5年後年商120億円以上、従業員400名へと急成長しました。小さな会社が「PR」の力で飛躍することを経験し、「PRというのは魔法なんだ、会社のみんなを幸せにすることができるんだ」という思いから、「PR」の魅力にすっかり取り憑かれるようになりました。
                            </p>
                        </article>
                        <article class="article fadein">
                            <h3 class="heading3">なぜまた、転職をしたのですか？</h3>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story4.jpg" alt="">
                            </div>
                            <span class="subtitle">
                                〜 第2の転職<br>
                                もう一度ベンチャー企業への成長にPRで関わりたい ~
                            </span>
                            <p class="text">
                                エアウィーヴが大きくなり、PR部門に後輩も育っていたので、再び小規模なベンチャー企業で挑戦する道を選びたいと思うようになりました。子供が1歳の時でしたが、愛知県の町工場、「バーミキュラ」という鍋製造販売の愛知ドビー株式会社への転職を決めました。転職後はPR・マーケティング職として勤務し、まずは実績作りのためにシェフや料理研究家にアプローチしました。メディアに対しては、メディアごとに「刺さるポイント」を意識して資料を作り変え、また地道なアプローチを開始しました。
                            </p>
                            <p class="text">
                                このようなPR活動により、メディア露出は増えていったのですが、なかなか売り上げには結びつきませんでした。それでもPRの種をこつこつと蒔き続け実績を増やし続けた結果、　2週連続でゴールデンの時間帯にテレビ番組で取り上げてもらえることになり、いきなり火が付いたように売れ始めました。あっという間に在庫がなくなり、バーミキュラは1年待ちの人気商品となりました。その後愛知ドビーは2年で11億円から44億円に成長していきました。</p>
                        </article>
                        <article class="article fadein">
                            <h3 class="heading3">なぜ独立したのですか？</h3>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story5.jpg" alt="">
                            </div>
                            <span class="subtitle">〜起業。PR会社としての挑戦　PRで世の中に感動を〜</span>
                            <p class="text">
                                私はPRの仕事が好きで、もっと挑戦したい、もっと企業に、世の中に貢献したいと強く感じていました。しかし、会社の中では挑戦できる限界があることと、挑戦しながらも子育ても自分なりにコントロールして両立したい思いから、起業を決意しました。これまでに起業を考えたことはなく、あったのは「人の役に立ちたい」という想いだけでした。
                            </p>
                            <p class="text">
                                なんとか自分でできることはないか考えたとき、フェイスブックやブログなど、SNSで認知を広げ、フリーランスで働く女性たちが目に留まりました。これなら元手もいらず、自分でもPRで、必要とする方のお役に立てるかもしれないと思い、さっそくブログを書き、SNSの投稿を始めました。自分の存在を知ってもらうため、必死にSNSを更新しました。初めてのお客様は、そんな私のブログを読んでくださった読者の方でした。
                            </p>
                            <p class="text">
                                PRのコンサルティングを始めた当初は、とにかく実績を作ることを目標に、無料で行っていました。しかし、お客様の口コミや、頂いたご感想を更にSNSで紹介することを繰り返しているうちに徐々に認知が広がり、お客様の数が増えていきました。個別対応では追い付かなくなり、講義形式の「PR塾」という形を取るようになりました。PR塾は期を重ねるごとにお客様のステージも変わって行き、全国から起業家、経営者、PR担当者が受講くださるまでに成長しました。2019年4月14期まですべて満席で開講することができ、3年間で長期講座卒業生は約330名。PRセミナー等でPRをお伝えした累計は、1200人を超えました。
                            </p>
                        </article>
                        <article class="article fadein">
                            <h3 class="heading3">なぜ、会社名をikunoPRからLITAへ変更したのですか？</h3>
                            <div class="img-wrapper">
                                <img src="<?php echo content_url() ?>/themes/lita/assets/img/story6.jpg" alt="">
                            </div>
                            <span class="subtitle">
                                〜起業家から、経営者・組織化へ。<br>
                                利他の心・PRで世界に大きな感動を〜
                            </span>
                            <p class="text">
                                PR塾に反響をいただく中で、私自身にも企業PRの案件をお声がけくださる方が増え、PRの需要の大きさを日に日に感じるようになりました。情報が溢れる現代社会では、広告の効果はどんどん薄れ、SNSやPRがますます台頭していると実感してきています。これからは、PRノウハウを教えることだけでなく、世の中に大きな感動を巻き起こす、自社自体でイノベーションを起こしたいと考え、企業との仕事を増やしていくことを決意しました。
                            </p>
                            <p class="text">
                                次第に案件の数も増え、多様になっていく中で、これからはチームの力で大きなことを成し遂げたいという想いが強くなりました。それは、起業してからの3年で、私は完璧な人間ではないということを知ると共に、チームでのPRサポートで結果が出ることを何度も体験したからです。私一人では、できないところ、足りないところがたくさんあります。そんな自分が、より大きな感動を作り、社会へ貢献して行くためには、1人ではなく組織を作り、拡大していくことが必要なのだと心を決めました。
                            </p>
                            <p class="text">
                                2019年4月、会社名を株式会社LITA（利他）とし、初めての社員採用を開始、組織化を進めています。社名LITA＝利他とは、自分の利益よりも、人や企業、世の中のことを思いやる心です。PRも、仕事も、利他の心が無いと、成功しないと感じています。利他の経営・仕事・PRを通し、世の中に大きな感動をもたらすPR会社として、これからも挑戦していきます。
                            </p>
                        </article>
                    </div>
                    <?php endif; ?>
                </div>
            </section>
        </main><!-- .main -->
    </div><!-- .content-area -->
</div><!-- top-page -->

<?php
get_sidebar();
get_footer();
