<head>
<meta charset="UTF-8">
  <?php get_header(); ?>
</head>
<div class="l-wrapper">
<header class="l-header"><!--ヘッダー -->
    <div class="p-header">
        <div class="p-header__contentsWrap">
            <div class="p-header__logo">          
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/Logo.png" alt="ヘッダーロゴ">
            </div>
            <nav>
                <ul class="p-header__navList">
                    <li id="headUs" class="p-header__navItem close">
                        <p class="p-header__navLink">私たちについて</p>
                        <img class="p-header__navArrow u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/right_arrow.png" alt="右矢印">
                    </li>
                    <li id="headBusines" class="p-header__navItem close">
                        <p class="p-header__navLink">事業紹介</p>
                        <img class="p-header__navArrow u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/right_arrow.png" alt="右矢印">
                    </li>
                    <li id="headRecruit" class="p-header__navItem close">
                        <p class="p-header__navLink">採用情報</p>
                        <img class="p-header__navArrow u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/right_arrow.png" alt="右矢印">
                    </li>
                    <li id="headCompany" class="p-header__navItem close">
                        <p class="p-header__navLink">会社情報</p>
                        <img class="p-header__navArrow u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/right_arrow.png" alt="右矢印">
                    </li>
                    <li id="headContact" class="p-header__navItem close">
                        <p class="p-header__navLink">お問い合わせ</p>
                        <img class="p-header__navArrow u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/right_arrow.png" alt="右矢印">
                    </li>
                </ul>
            </nav>
            <button id="menu" class="c-hamburger u-hidden-pc">
                <span class="c-hamburger__bar"></span>
                <span class="c-hamburger__bar"></span>
                <span class="c-hamburger__bar"></span>
            </button>
        </div>
    </div>
</header>
  <main>
    <div id="wrap__top" class="p-wrapper">
      <div class="p-wrap__gradation1_img p-wrap__img1X"></div>
      <div class="p-wrap__gradation2_img p-wrap__img2X"></div>
        <div class="p-wrap__img"></div>
      <div class="p-wrap__scrollBox">
        <p class="p-wrap__scrollText">SCROLL</p>
        <div class="p-wrap__scrollDown">
          <div class="p-wrap__scrollLine"></div>
        </div>
      </div>
      <div class="l-section-top">
        <div class="c-scrolldown">
          <div class="c-line"></div>
        </div>
      </div>
      <div class="p-wrapper__inner">
        <section><!--ファーストビュー-->
          <div class="p-firstview">
            <!-- <img class="p-firstview__logo u-hidden-tb" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/Logo.png" alt="ヘッダーロゴ"> -->
            <div class="p-firstview__contents">
              <p class="p-firstview__title">
                エンジニアの<br class="u-hidden-spUp">
                キャリアに<br class="u-hidden-spUp"><br class="u-hidden-spUnder"><br class="u-hidden-spUp u-hidden-spUnder">
                徹底的に<br class="u-hidden-spUp">向き合い続ける
              </p>
              <p class="p-firstview__text">
              「適切にキャリアアップができない」「生成AIの台頭を不安に感じる」<br>
              そんなエンジニアが安心して働ける環境を。Saitekiは生成AI時代にAIと共存するエンジニア集団を目指します。
              </p>
            </div>
            <!-- <img class="p-firstview__scroll" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/Scroll bar.png" alt="scroll__img">   -->
          </div>
        </section>
        <section><!--エクスプレイン-->
          <div class="p-explain">
            <p class="p-explain__title">
              “わからないまま”<br class="u-hidden-spUp">のキャリアに<br class="u-hidden-pcLarge">
              “わかるまで向き合う”
            </p>
            <p class="p-explain__text">
              頑張ってきた。ちゃんとやってきた。<br>
              でも、ふとしたときに思う。「自分は今、どこに向かっているんだろう？」<br>
              <br>
              理想があるわけじゃない。ただ、なんとなく不安だった。<br>
              でもその不安に名前をつけられないまま、「とりあえず」の毎日を過ごしていた。Saitekiは、そんな“わからないまま”を否定しない。<br>
              <br>
              理想がなくても、言葉にならなくてもいい。<br>
              技術も現場もわかる“仲間”が、あなたの今と、これからの可能性を一緒に見つけていく。
            </p>
          </div>
        </section>
        <section><!--メッセージ-->
          <div id="scrollUs" class="p-about">
              <p class="c-title__num">About Us</p>
              <h1 class="c-title">私たちについて</h1>
              <p class="p-about__text c-text">
                  私たちは、エンジニア一人ひとりの“これから”に本気で向き合う集団です。<br>
                   技術は常に変わり続け、昨日までの正解が今日には通用しないこともあります。<br>
                   <br>
                  とくに生成AIの登場によって、開発の在り方も、求められるスキルも大きく進化し始めました。<br>
                  私たちは、その変化から目をそらしません。<br>
                  <br>
                  AIを道具として“使いこなす”だけでなく、共に考え、共に開発し、新しい時代にふさわしいエンジニアリングを探求し続けています。<br>
                  <br>
                  キャリアに迷いがあってもいい。自信が持てない日があってもいい。<br>
                  その“いま”を受け止め、一緒に次の一歩をつくっていく仲間でありたいと考えています。<br>
                  変わり続ける時代の中で、エンジニアとしての価値を伸ばし続ける。<br>
                  <br>
                  そして、AI時代に求められる、新しいエンジニアリング集団へ。 <br>
                  Saitekiは、その道のりを仲間とともに歩んでいきます。
                </p>
              <!-- <img class="p-about__right" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/aboutUs_img.png" alt="給与グラフ"> -->
          </div>
        </section>
        <section><!--ビジネス-->
          <div id="scrollBusines" class="p-business">
            <div class="p-business__contents">
              <p class="c-title__num">About Business</p>
              <h1 class="c-title">事業紹介</h1>
              <div class="p-business__contentsBox">
                <div class="p-business__contentsItem nav-open">
                  <div class="p-business__itemBox">
                    <div class="p-business__titleBox">
                      <div class="p-business__titleLeft">
                        <img class="p-business__mark" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.png" alt="下矢印">
                        <p class="tpoggle c-title__business">SES事業</p>
                      </div>
                      <p class="c-text__business">
                        商流の浅い案件をご紹介することでエンジニアへ適切な報酬額が支払われるようなSES事業を展開しています。長年の営業経験に基づくスピーディーな対応でクライアントからの支持を得ています。
                      </p>
                    </div>
                  </div>
                  <div class="p-business__itemContentsBox">
                    <div class="p-business__itemContent">
                      <img class="p-business__itemMark" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/yenn.png" alt="円マーク">
                      <p class="c-text__businessItemTitle">基準単価連動制度で<br>単価に応じて報酬UP</p>
                      <p class="c-text__businessItemText">
                       エンジニアがスキルアップし<br>
                       顧客単価が上がると、連動して給与がアップする仕組みです。<br>
                       <br>
                       この仕組みにより、実力と努力が正当に評価され、公平で透明性の高い評価をすることができます。
                      </p>
                    </div>
                    <div class="p-business__itemContent">
                      <img class="p-business__itemMark" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/shake.png" alt="握手">
                      <p class="c-text__businessItemTitle">
                        商流の浅い案件獲得への
                        <br>コミット
                      </p>
                      <p class="c-text__businessItemText">
                        業界経験豊富な営業担当が優良案件を厳選。<br>
                        <br>
                        商流の浅い案件や高単価の案件を中心に紹介し、エンジニア還元率80%を目指します。
                      </p>
                    </div>
                    <div class="p-business__itemContent">
                      <img class="p-business__itemMark" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/increase.png" alt="増加">
                      <p class="c-text__businessItemTitle">
                        キャリアアップを考えた
                        <br>
                        案件自由選択制
                      </p>
                      <p class="c-text__businessItemText">
                        個々のキャリアにあった案件を10案件ほどご紹介しています。
                        <br><br>
                        ご自身の意向にあったものをご選択いただくことで、望んだ分野でのキャリアアップを実現できます。
                      </p>
                    </div>
                  </div>
                </div>
                <div class="p-business__contentsItem">
                  <div class="p-business__titleBox">
                    <p class="c-title__business">SES業界<br class="u-hidden-spUnder">特化SaaS</p>
                    <p class="c-text__business">SES業界にはさまざまな課題が存在しています。中でも多重下請け構造は大きな課題であると認識しており、その課題を解消するSaaSを開発中です。</p>
                  </div>
                </div>
                <div class="p-business__contentsItem">
                  <div class="p-business__titleBox">
                    <p class="c-title__business">IT業界特化<br class="u-hidden-spUnder">事業承継支援</p>
                    <p class="c-text__business  ">SES企業の中にはオーナーが事業承継に悩む企業も数多く存在しています。事業承継にかかるお悩みのご相談を受け、時に提携先をご紹介しながら適切な承継手段についてご助言を行います。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section><!--リクルート-->
          <div id="scrollRecruit"  class="p-recruit"><!--採用情報-->
            <div class="p-recruit__inner">
              <div class="p-recruit__contents">
                <div class="p-recruit__titleBox">
                  <p class="c-title__num">Recruit Information</p>
                  <h1 class="c-title">採用情報</h1>
                </div>
                <div class="p-recruit__caseBox">
                  <div class="p-recruit__mainTitleBox">
                    <p class="p-recruit__textCase">Case Example</p>
                    <p class="p-recruit__titleCase">案件紹介事例</p>
                  </div>
                  <div class="p-recruit__itemCaseBox">
                    <div class="p-recruit__itemCase">
                      <div class="p-recruit__caseNumbox">
                        <p class="p-recruit__caseNum">CASE1</p>
                      </div>
                      <div class="p-recruit__caseTitleBox">
                        <p class="p-recruit__caseTitle">SEからPLへ転身しつつ、<br>月収5万円アップを達成！</p>
                      </div>
                      <div class="p-recruit__caseContentBox">
                        <div>
                          <p class="p-recruit__titleContent"><spam class="p-recruit__circle">●</spam>  参画までの経緯</p>
                          <p class="p-recruit__textCaseContent">数社のSES企業を転職しながらフロントエンドのSEとして業務に従事。</p>
                        </div>
                        <div>
                          <p><spam class="p-recruit__circle">●</spam>  参画プロジェクト</p>
                          <p class="p-recruit__textCaseContent">大手事業会社における新規事業開発プロジェクト。<br>基本設計以降の工程を担当しつつ、現在はメンバーの取りまとめを担う。</p>                            
                        </div>
                        <div>
                          <p><spam class="p-recruit__circle">●</spam>  報酬</p>
                          <p class="p-recruit__textCaseContent">80万円/月<br><span class="p-recruit__textGray">※控除前の金額です。</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="p-recruit__itemCase">
                      <div class="p-recruit__caseNumbox">
                        <p class="p-recruit__caseNum">CASE2</p>
                      </div>
                      <div class="p-recruit__caseTitleBox">
                        <p class="p-recruit__caseTitle">PGから SEへ転身しつつ、<br>希望の月収を達成！</p>
                      </div>
                      <div class="p-recruit__caseContentBox">
                        <div>
                          <p class="p-recruit__titleContent"><spam class="p-recruit__circle">●</spam>  参画までの経緯</p>
                          <p class="p-recruit__textCaseContent">前職のSES企業でPGとして3年勤務するも同じ作業をひたすら繰り返すのみでSEとしての稼働に憧れていて転職を決意。</p>
                        </div>
                        <div>
                          <p><spam class="p-recruit__circle">●</spam>  参画プロジェクト</p>
                          <p class="p-recruit__textCaseContent">大手SIerのプロジェクトにおいてPGとして参画。当該プロジェクトの終了時に別案件へスライドし、現場での働きが評価されSEとしての業務に従事し始める。</p>                            
                        </div>
                        <div>
                          <p><spam class="p-recruit__circle">●</spam>  報酬</p>
                          <p class="p-recruit__textCaseContent">55万円/月<br><span class="p-recruit__textGray">※控除前の金額です。</span></p>
                        </div>
                      </div>
                    </div>                 
                  </div>
                </div>
                <div class="p-recruit__benefit">
                  <p class="c-title__sub">●  福利厚生</p>
                  <div class="p-recruit__benefitContentsBox">
                    <div class="p-recruit__benefitContent">
                      <div class="p-recruit__benefitContentTitleBox">
                        <p class="p-recruit__benefitContentTitle">休暇</p>
                      </div>
                      <div class="p-recruit__benefitItemBox">
                        <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">完全週休二日制 (土日祝)</p>
                        </div>
                        <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">有給休暇 (入社6ヶ月で10日付与)</p>
                        </div>
                        <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">慶弔休暇、年末年始休暇 (12/29-1/3)</p>
                        </div>
                        <!-- <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">夏季休暇 (年5日付与、7月〜12月に1日単位で使用可能)</p>
                        </div> -->
                        <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">ライフサポート休暇 (年5日付与)</p>
                        </div>
                      </div>
                    </div>
                    <div class="p-recruit__benefitContent">
                      <div class="p-recruit__benefitContentTitleBox">
                        <p class="p-recruit__benefitContentTitle">手当</p>
                      </div>
                      <div class="p-recruit__benefitItemBox">
                        <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">社会保険完備  (健康保険、厚生年金、労災保険、雇用保険)</p>
                        </div>
                        <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">通勤手当支給＆交通費全額支給 (通勤手当は月最大2万円まで)</p>
                        </div>
                        <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">時間外手当全額支給 (月30時間のみなし残業あり)</p>
                        </div>
                        <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">昇給年1回</p>
                        </div>
                        <div class="p-recruit__benefitItem">
                          <p class="p-recruit__benefitItemText">賞与年2回</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-recruit__solveBox">
                  <p class="c-title__sub">●  募集要項</p>
                  <div class="p-recruit__solveContentsBox">
                    <div class="p-recruit__solveOpenBar">
                      <p class="p-recruit__solveBarText">エンジニア</p>
                    </div>
                    <div class="p-recruit__solveItem">
                      <div class="p-recruit__solveItemInner">
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">職種</p>
                          <p class="p-recruit__solveItemText">エンジニア</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">雇用形態</p>
                          <p class="p-recruit__solveItemText">正社員</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">業務内容</p>
                          <p class="p-recruit__solveItemText">・メンバーの専門性に合わせた、エンジニア業務（要件定義～運用保守）<br>・PMやPdMへの挑戦も可能</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">勤務地</p>
                          <p class="p-recruit__solveItemText">リモート、プロジェクトベースでのクライアントオフィスへの出社（1都3県を想定）</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">給与</p>
                          <p class="p-recruit__solveItemText">正給与形態：月給制<br>想定年収：400万〜<br>月給：契約単価の60%～（内訳:固定給20万円＋インセンティブ）<br>※条件次第で一定期間前職給与保障</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">就業時間</p>
                          <p class="p-recruit__solveItemText">標準労働時間帯：9:00-18:00</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">休日休暇</p>
                          <p class="p-recruit__solveItemText">完全週休2日制、祝日、慶弔休暇、年末年始休暇、年次有給休暇</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">福利厚生</p>
                          <p class="p-recruit__solveItemText">社会保険完備、通勤手当支給＆交通費全額支給、時間外手当全額支給、昇給年1回、賞与年2回等</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">経験年数</p>
                          <p class="p-recruit__solveItemText">問わない</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">経験業種</p>
                          <p class="p-recruit__solveItemText">問わない</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">経験業務</p>
                          <p class="p-recruit__solveItemText">以下のいずれかの業務経験を推奨<br>・エンジニアとしての業務経験者<br>・上流工程（要件定義フェーズ）の経験<br>・PM・PdMの経験<br>・詳細設計/開発フェーズ以降の経験3年以上</p>
                        </div>
                        <div class="p-recruit__solveItemCard">
                          <p class="p-recruit__solveItemTitle">歓迎資格/<br class="u-hidden-pc">スキル</p>
                          <p class="p-recruit__solveItemText">プログラミング系の資格</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section><!--面談-->
          <div class="p-interview">
            <div class="p-interview__imgWrap">
            </div>
            <div class="p-interview__contentsWrap">
                <div class="p-interview__contentsLeft">
                  <p class="p-interview__contentsLeftText">Recruit</p>
                  <p class="p-interview__contentsLeftTitle">カジュアル面談</p>
                </div>
                <div class="p-interview__contentsRight">
                  <p class="p-interview__title">Saitekiでは一緒に働く仲間を募集しています。<br class="u-hidden-tb">まずは気軽にカジュアル面談をしてみませんか？</p>
                  <button id="interviewButton" class="p-interview__button">
                    <p class="p-interview__buttonText">カジュアル面談を申し込む</p>
                  </button>
                </div>
            </div>
          </div>
        </section>
        <section><!--会社情報-->
          <div id="scrollCompany" class="p-company">
            <div class="p-company__contents"><!-- 会社紹介-->
              <div class="p-company__head">
                <p class="c-title__num">About Company</p>
                <h1 class="c-title">会社について</h1>
              </div>
              <p class="c-title__sub">●ミッション・ビジョン・バリュー</p>
              <img class="p-company__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mvv_img.png" alt="ミッション・ビジョン・バリュー">
              <p class="c-title__sub">会社情報</p>
              <div class="p-company__cardBox">
                <div class="p-company__card">
                  <p class="p-company__title">会社名</p>
                  <p class="p-company__text">株式会社Saiteki</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">設立</p>
                  <p class="p-company__text">2024年5月15日</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">所在地</p>
                  <p class="p-company__text">東京都渋谷区桜丘町18-4 二宮ビル1F</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">代表者</p>
                  <p class="p-company__text">代表取締役社長  <br class="u-hidden-spUp">戸塚 直道</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">事業内容</p>
                  <p class="p-company__text">SES / SES業界特化SaaSの自社開発・販売 / IT業界特化事業承継支援</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">資本金</p>
                  <p class="p-company__text">1,300万円</p>
                </div>
              </div>
              <p class="c-title__sub">代表プロフィール</p>
              <div class="p-company__profContents">
                <div class="p-company__exectContents">
                  <p class="p-company__profJob">代表取締役社長</p>
                  <p class="p-company__profName">戸塚 直道</p>
                  <p class="p-company__profDesc">2011年4月<!-- <br class="u-hidden-spUp"> -->　学生の頃、ベンチャー企業にて飛び込み営業を4年経験
                    <br>2015年4月<!-- <br class="u-hidden-spUp"> -->　大和証券株式会社にてリテール営業に従事
                    <br>2018年8月<!-- <br class="u-hidden-spUp"> -->　株式会社日本M＆AセンターにてIT業界のM＆A仲介に特化
                    <br>2022年1月<!-- <br class="u-hidden-spUp"> -->　ビットバンク株式会社にて事業開発を経験
                    <br>2022年9月<!-- <br class="u-hidden-spUp"> -->　株式会社ディア・ライフにてSES事業の立上げ責任者を経験
                    <br>2024年5月<!-- <br class="u-hidden-spUp"> -->　株式会社Saitekiを創業
                  </p>
                </div>
                <img class="p-company__exectImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/exect_img.png" alt="代表写真">
              </div>
            </div>
            <!-- 社長照会 -->
            <!-- <div class="p-company__contents">
              <div class="p-company__head">
                <h1 class="c-title">戸塚直道のプロフィールやコメント・写真</h1>
              </div>
              <div class="p-company__cardBox">
                <div class="p-company__card">
                  <p class="p-company__title">会社名</p>
                  <p class="p-company__text">株式会社Saiteki</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">設立</p>
                  <p class="p-company__text">2024年5月15日</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">所在地</p>
                  <p class="p-company__text">東京都中野区弥生町2-41-17  東京コンテンツインキュベーションセンター No.14</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">代表者</p>
                  <p class="p-company__text">代表取締役社長  <br class="u-hidden-spUp">戸塚 直道</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">事業内容</p>
                  <p class="p-company__text">SES / SES業界特化SaaSの自社開発・販売 / IT業界特化事業承継支援</p>
                </div>
                <div class="p-company__card">
                  <p class="p-company__title">資本金</p>
                  <p class="p-company__text">1,300万円</p>
                </div>
              </div>
            </div> -->
          </div>
        </section>
        <!--お知らせ-->
        <!-- <section>
          <div id="scrollNews" class="p-news">
            <div class="p-news__inner">
              <div class="p-news__titleBox">
                <p class="c-title__num">News</p>
                <h1 class="c-title">Saitekiからのお知らせ</h1>
              </div>
              <p class="p-news__text">各種SNS、noteで最新情報を発信中です。ぜひフォローをお願いします。</p>
              <div class="p-news__contents">
                <div class="p-news__item">
                </div>
                <div class="p-news__item">
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <section><!--問い合わせ-->
          <div id="scrollContact" class="p-contact">
            <div class="p-contact__innner">
              <div class="p-contact__head">
                <p class="c-title__num">Contact</p>
                <h1 class="c-title">お問い合わせ</h1>
              </div>
              <?php echo do_shortcode('[contact-form-7 id="f9fbbd6" title="お問い合わせ"]'); ?>
            </div>
          </div>
        </section>
      </div>
      <?php get_footer(); ?>
    </div>
  </main>
</body>
