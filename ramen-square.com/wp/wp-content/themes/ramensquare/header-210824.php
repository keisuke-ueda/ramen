<!DOCTYPE html>
<html lang="ja"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ラーメンスクエアの公式ホームページです。東京都の立川駅にあるニューヨークをイメージした空間に味にこだわる7店舗が集結したラーメンの殿堂です。個性溢れる各店が、充実のメニューで皆様をお待ちしています。" />
  <meta name="keywords" content="<?php echo get_the_title(); ?>,ラーメンスクエア,クーポン,割引券,ラーメンランキング,ラーメン店,立川,アレアレア,ramen-square,マンハッタン,ニューヨーク,タイムズスクエア,ラーメン村, " />
  <meta name="Author" content="ラーメンスクエア">
  <meta name="copyright" content="ラーメンスクエア">
	
<meta property="og:title" content="<?php if ( is_home() || is_front_page() ) : ?>【公式】ラーメンスクエア立川<?php else : ?><?php echo get_the_title(); ?> ｜ 【公式】ラーメンスクエア立川<?php endif; ?>" />
<meta property="og:type" content="website" />
<meta property="og:description" content="ラーメンスクエアの公式ホームページです。東京都の立川駅にあるニューヨークをイメージした空間に味にこだわる7店舗が集結したラーメンの殿堂です。個性溢れる各店が、充実のメニューで皆様をお待ちしています。" />
<meta property="og:url" content="https://ramen-square.com/" />
<meta property="og:site_name" content="【公式】ラーメンスクエア立川" />
<meta property="og:image" content="https://ramen-square.com/img/share/sns_logo.png" />
	
  <link rel="canonical" href="<?php echo get_the_permalink(); ?>"><!--●indexは/トメ-->
  <link rel="apple-touch-icon" size="152x152" href="<?php echo home_url(); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" size="196x196" href="<?php echo home_url(); ?>/android-chrome.png">
  <link rel="icon" href="<?php echo home_url(); ?>/img/fav-icon.png" type="image/x-icon" />
  <link rel="icon" href="<?php echo home_url(); ?>/img/fav-icon.png" type="image/x-icon" />
<?php if ( is_home() || is_front_page() ) : ?>
  <title>【公式】ラーメンスクエア立川</title>
<?php else : ?>
  <title><?php echo get_the_title(); ?> ｜ 【公式】ラーメンスクエア立川</title>
<?php endif; ?>
  <link href="<?php echo home_url(); ?>/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="<?php echo home_url(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link href="<?php echo home_url(); ?>/css/reset.css" rel="stylesheet">
  <link href="<?php echo home_url(); ?>/css/base.css" rel="stylesheet">
  <link href="<?php echo home_url(); ?>/css/common.css" rel="stylesheet">
<?php if ( is_home() || is_front_page() ) : ?>
  <link href="<?php echo home_url(); ?>/js/slick-theme.css" rel="stylesheet" type="text/css">
  <link href="<?php echo home_url(); ?>/js/slick.css" rel="stylesheet" type="text/css">
  <link href="<?php echo home_url(); ?>/css/top.css" rel="stylesheet">
<?php endif; ?>	
<?php if(is_page('news')) :?>
	  <link href="<?php echo home_url(); ?>/css/archive-news.css" rel="stylesheet">
<?php endif; ?>
<?php if ( is_category() ) : ?>
  <link href="<?php echo home_url(); ?>/css/archive-category.css" rel="stylesheet">
<?php endif; ?>	
<?php if ( is_single() ) : ?>
  <link href="<?php echo home_url(); ?>/css/news.css" rel="stylesheet">
<?php endif; ?>	
<?php if(is_page('topics-all')) :?>
  <link href="<?php echo home_url(); ?>/css/topix.css" rel="stylesheet">
<?php endif; ?>	
<?php if(is_page('movie-all')) :?>
  <link href="<?php echo home_url(); ?>/css/movie.css" rel="stylesheet">
<?php endif; ?>	
<?php if(is_page('allergen')) :?>
  <link href="<?php echo home_url(); ?>/css/allergen.css" rel="stylesheet">
<?php endif; ?>	
<?php if(is_page('tryout')) :?>
  <link href="<?php echo home_url(); ?>/css/tryout.css" rel="stylesheet">
<?php endif; ?>
<?php if(is_page('shops')) :?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="<?php echo home_url(); ?>/css/shops.css" rel="stylesheet">
  <link href="<?php echo home_url(); ?>/js/slick-theme.css" rel="stylesheet" type="text/css">
  <link href="<?php echo home_url(); ?>/js/slick.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
  <script src="<?php echo home_url(); ?>/js/jquery.rwdImageMaps.js"></script>
  <script src="<?php echo home_url(); ?>/js/jquery.rwdImageMaps.min.js"></script>
  <script src="<?php echo home_url(); ?>/js/slick.js"></script>
  <script src="<?php echo home_url(); ?>/js/slick.min.js"></script>
<?php endif; ?>	
<?php if(is_page( array( 'gokujoe','ebisu','ebisuke','katsumi','seattleramenstand','goku','zabon','denyasu','kokoro','toriton','gousei','asahi') ) ): ?>
  <link href="<?php echo home_url(); ?>/css/shop_page.css" rel="stylesheet">
<?php endif; ?>	
<?php if(is_page('about')) :?>
  <link href="<?php echo home_url(); ?>/css/about.css" rel="stylesheet">
<?php endif; ?>	
<?php if(is_page('recruit')) :?>
  <link href="<?php echo home_url(); ?>/css/recruit.css" rel="stylesheet">
<?php endif; ?>		
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149134062-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149134062-1');
</script>
</head>

<body>
<div id="wptime-plugin-preloader"></div>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v4.0&appId=1111027422297922&autoLogAppEvents=1"></script>

  <!--================Header Menu Area =================-->

  <div class="wrapper">
    <header class="main_menu_area">
      <div class="text-center">
        <div class="b-hour sp-none">
          <p class="info-wrap">
			  
			  <style>.b-hour {
    height: 90px!important;
}</style>
			  <p class="info-l" style="line-height: 1.5;">【営業時間】<br><span style="color:#ff0000; background: #ffff00; padding: 2px 3px;">7月12日(月)〜8月31日(火)の期間 月曜〜土曜・祝⽇ 11:00〜20:00 ｜ 日曜 10:30〜20:00</span><br>
（ラストオーダー 閉店30分前）</p>
<p class="info-r"><a href="<?php echo home_url(); ?>/c-new/98.html"><img src="<?php echo home_url(); ?>/img/logo_pasmo.gif" class="infobnr01" alt="PASMO"/></a><a href="<?php echo home_url(); ?>/c-new/3659.html"><img src="<?php echo home_url(); ?>/img/logo_pasmo2.gif" class="infobnr02" alt="paypay"/></a><span class="info-r-txt">ラーメンスクエア全店でご利用可能</span></p></p>
        </div>
      </div>
      <!--text-center-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="h-link_box">
          <img id="ra-logo" src="<?php echo home_url(); ?>/img/logo.png" alt="">
          <a class="navbar-brand" href="<?php echo home_url(); ?>"></a>
        </div>

        <!--<a class="navbar-brand" href="#"><img id="ra-logo" src="img/logo.png" alt=""></a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="step navbar-nav">
            <li class="nav-item mt20">
              <p class="pc-none">【営業時間】<br><span style="font-size: 100%; line-height: 1.2; color:#ff0000; background: #ffff00; padding: 3px;">7月12日(月)〜8月31日(火)の期間<br>
月曜〜土曜・祝⽇ 11:00〜20:00 ｜ 日曜 10:30〜20:00</span><br>
ラストオーダー 閉店30分前<br>
<span class="sp_head_bnr"><a class="pasmo" href="<?php echo home_url(); ?>/c-new/98.html"><img class="sp_head_bnr_img01" src="<?php echo home_url(); ?>/img/logo_pasmo.gif" alt="PASMO"/></a><a class="pasmo" href="<?php echo home_url(); ?>/c-new/3659.html"><img class="sp_head_bnr_img02" src="<?php echo home_url(); ?>/img/logo_pasmo2.gif" alt="paypay"/></a></span><br>
ラーメンスクエア全店でご利用可能</p>
            </li>
            <li class="nav-item toggle-c pc-none">
              <p class="pc-none">Contents</p>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>">ホーム</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/shops">店舗一覧</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/about">ラーメンスクエア について</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/about#anc_ac">アクセス</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/allergen">アレルゲン情報</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/about#anc_ct">お問い合わせ</a></li>
          </ul>
        </div>
      </nav>

    </header>
  </div>
  <!--wrapper-->
	
  <!--================End Header Menu Area =================-->
	
