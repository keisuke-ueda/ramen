


  <!--================Footer Area =================-->

  <section class="foot-banner">
    <div class="wrapper">
      <div class="container-fluid wt92p">
        <div class="row">
          <div class="f-banner col-xs-6 col-sm-3 col-md-3">
            <a href="http://www.arearea.co.jp/event/dreamidorea/" target="_blank"><img src="<?php echo home_url(); ?>/img/banner1.jpg"></a>
          </div>
          <div class="f-banner col-xs-6 col-sm-3 col-md-3">
            <a href="<?php echo home_url(); ?>/general-information"><img src="<?php echo home_url(); ?>/img/banner2.jpg"></a>
          </div>
          <div class="f-banner col-xs-6 col-sm-3 col-md-3">
            <a href="<?php echo home_url(); ?>/tryout"><img src="<?php echo home_url(); ?>/img/banner3.jpg"></a>
          </div>
          <div class="f-banner col-xs-6 col-sm-3 col-md-3">
            <a href="http://www.arearea.co.jp/" target="_blank"><img src="<?php echo home_url(); ?>/img/banner4.jpg"></a>
          </div>
        </div>
        <!--row-->
      </div>
    </div>
  </section>

  <div class="wrapper">
    <div id="f-wrap" class="clearfix">
      <nav id="footnav">
        <ul class="foot-ul">
          <li class="pc-none toggle-c li-co">
            <p class="pc-none">Contents</p>
          </li>
          <li class="foot-li"><a href="<?php echo home_url(); ?>">ホーム</a></li>
          <li class="foot-li"><a href="<?php echo home_url(); ?>/shops">店舗一覧</a></li>
          <li class="foot-li"><a href="<?php echo home_url(); ?>/about">ラーメンスクエア について</a></li>
          <li class="foot-li"><a href="<?php echo home_url(); ?>/about#anc_ac">アクセス</a></li>
          <li class="foot-li"><a href="<?php echo home_url(); ?>/allergen">アレルゲン情報</a></li>
          <li class="foot-li"><a href="<?php echo home_url(); ?>/about#anc_ct">お問い合わせ</a></li>
          <li class="foot-li"><a href="<?php echo home_url(); ?>/recruit">求人</a></li>
        </ul>
      </nav>
      <div>
        <a style="z-index: 9999;" class="link_box" href="<?php echo home_url(); ?>"><img id="foot-logo" src="<?php echo home_url(); ?>/img/logo.png" alt="ラーメンスクエア立川">
        </a>
      </div>
      <p class="pb10 foot-add">東京都立川市柴崎町3-6-29<br>TEL:042-521-7111</p>
    </div>
    <!--wrap-->
    <p id="page-top"><a href="#wrap"><img src="<?php echo home_url(); ?>/img/page-to-top.png"></a></p>
  </div>
  <!--wrapper-->
  <div class="copyright">
    <p class="text-center">Copyright（C）ラーメンスクエア All Rights Reserved.</p>
  </div>
  </footer>

  <!--================End Footer Area =================-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<?php if(is_page('shops')) :?>
<script>
    $('.main-slider').slick({
      arrows: true,
      autoplay: false,
      prevArrow: '<img src="img/shops/swiper-prev2.png" class="slide-arrow prev-arrow">',
      nextArrow: '<img src="img/shops/swiper-next2.png" class="slide-arrow next-arrow">',
      asNavFor: '.shop-button',
    });
    $('.shop-button').slick({
      asNavFor: '.main-slider',
      arrows: false,
      autoplay: false,
      focusOnSelect: true,
      slidesToShow: 7,
      slidesToScroll: 7,
      infinite: false,
      swipe: false,
      touchMove: false
    });
  </script>
  <script src="<?php echo home_url(); ?>/js/jquery.rwdImageMaps.js"></script>
  <script src="<?php echo home_url(); ?>/js/jquery.rwdImageMaps.min.js"></script>
  <script src="<?php echo home_url(); ?>/js/slick.js"></script>
  <script src="<?php echo home_url(); ?>/js/slick.min.js"></script>
  <script>
    /*MAPレスポンシブ*/
    $(function() {
      $('img[usemap]').rwdImageMaps();
    });
  </script>
  <script>
    /*PCとスマホで画像を変える*/
    $(function() {
      var width = $(window).width();
      if (width < 768) {
        $(".toggleImg").each(function() {
          $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
        })
      }
    });
  </script>

<?php endif; ?>

  <script src="<?php echo home_url(); ?>/js/popper.min.js"></script>
  <script src="<?php echo home_url(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo home_url(); ?>/js/fuwa.js"></script>
<link rel="stylesheet" href="<?php echo home_url(); ?>/css/lity.min.css">
<script src="<?php echo home_url(); ?>/js/lity.min.js"></script>
  <script type="text/javascript" src="<?php echo home_url(); ?>/js/jquery.matchHeight.js"></script>
  <script>
$(function(){
　　$('.matchHeight').matchHeight();
});
</script>




<?php if ( is_home() || is_front_page() ) : ?>

  <script type="text/javascript" src="<?php echo home_url(); ?>/js/slick.min.js"></script>

<?php if ( wp_is_mobile() ) : ?>
<!--スマホ表示-->
<script>
    /*スライダー*/
    jQuery('.slickslider').slick({
      autoplay: true,
      asNavFor: '.slickthumb',
      adaptiveHeight: true,
      autoplaySpeed: 4500,
      dots: false,
      arrows: false,
		randomStart:true,
      fade: true
    });
    jQuery('.slickthumb').slick({
      autoplay: true,
      asNavFor: '.slickslider',
      autoplaySpeed: 4500,
      focusOnSelect: true,
      slidesToShow: 3,
		centerMode:true,
      slidesToScroll: 1,
      arrows: false
    });



    /*PCとスマホで画像を変える*/
    $(function() {
      var width = $(window).width();
      if (width < 768) {
        $(".toggleImg").each(function() {
          $(this).attr("src", $(this).attr("src").replace("pc-", "sp-"));
        })
      }
    });
  </script>
<?php else: ?>
<!--PC表示-->
<script>

    /*スライダー*/
    jQuery('.slickslider').slick({
      autoplay: true,
      asNavFor: '.slickthumb',
      adaptiveHeight: true,
      autoplaySpeed: 4500,
      dots: false,
      arrows: false,
      fade: true
    });
    jQuery('.slickthumb').slick({
      autoplay: true,
      asNavFor: '.slickslider',
      autoplaySpeed: 4500,
      focusOnSelect: true,
      slidesToShow: 4,
      slidesToScroll: 1,
		centerMode:true,
      arrows: false
    });

    /*PCとスマホで画像を変える*/
    $(function() {
      var width = $(window).width();
      if (width < 768) {
        $(".toggleImg").each(function() {
          $(this).attr("src", $(this).attr("src").replace("pc-", "sp-"));
        })
      }
    });
  </script>
<?php endif; ?>
<?php endif; ?>

<?php if(is_page('shops')) :?>
  <script>
    /*PCとスマホで画像を変える*/
    $(function() {
      var width = $(window).width();
      if (width < 768) {
        $(".toggleImg").each(function() {
          $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
        })
      }
    });
  </script>
<?php endif; ?>

<?php if(is_page( array( 'gokujoe','ebisu','ebisuke','katsumi','goku','zabon','kokoro','denyasu','toriton','gousei','asahi' ) ) ): ?>
  <script src="js/jquery.rwdImageMaps.js"></script>
  <script src="js/jquery.rwdImageMaps.min.js"></script>
  <script src="js/fuwa.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script>
    /*MAPレスポンシブ*/
    $(function() {
      $('img[usemap]').rwdImageMaps();
    });
  </script>
<?php endif; ?>

<?php wp_footer(); ?>
  <script src="<?php echo home_url(); ?>/js/theme.js"></script>

</body>

</html>
