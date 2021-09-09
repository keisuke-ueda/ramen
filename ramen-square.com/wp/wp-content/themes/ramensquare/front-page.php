<?php get_header(); ?>

	
	<style>
		.row{
			overflow: hidden!important;
		}
	</style>
		
  <div class="lay_height140"></div>


  <!--================Slider Area =================-->


  <ul class="slickslider">
    <li><a href="asahi"><img class="toggleImg" src="<?php echo home_url(); ?>/img/pc-slider-asahi.jpg" alt="image02"></a></li>
    <li><a href="gousei"><img class="toggleImg" src="<?php echo home_url(); ?>/img/pc-slider-gousei.jpg" alt="image03"></a></li>
    <li><a href="kokoro"><img class="toggleImg" src="<?php echo home_url(); ?>/img/pc-slider-kokoro.jpg" alt="image04"></a></li>
	  <li><a href="toriton"><img class="toggleImg" src="<?php echo home_url(); ?>/img/pc-slider-toriton.jpg" alt="image05"></a></li>
    <li><a href="gokujoe"><img class="toggleImg" src="<?php echo home_url(); ?>/img/pc-slider-gokujoe.jpg" alt="image01"></a></li>
  </ul>
  <ul class="slickthumb">
    <li><a href="#"><img class="s-img" src="<?php echo home_url(); ?>/img/sum-asahi.jpg" alt="image02"></a></li>
    <li><a href="#"><img class="s-img" src="<?php echo home_url(); ?>/img/sum-gousei.jpg" alt="image03"></a></li>
    <li><a href="#"><img class="s-img" src="<?php echo home_url(); ?>/img/sum-kokoro.jpg" alt="image04"></a></li>
	<li><a href="#"><img class="s-img" src="<?php echo home_url(); ?>/img/sum-toriton.jpg" alt="image05"></a></li>
	<li><a href="#"><img class="s-img" src="<?php echo home_url(); ?>/img/sum-gokujoe.jpg" alt="image01"></a></li>
  </ul>


  <!--================TOPIX Area =================-->

  <section class="rs-topix">
    <h1 class="top-h1">TOPICS</h1>
    <div class="wrapper">
      <div class="container-fluid topix-wrap">
        <div class="row">
			
<?php if ( is_mobile() ) : ?>
<!--スマホ表示-->
<?php
$args = array(
  'post_type' => 'topix', /* カスタム投稿名が「gourmet」の場合 */
  'posts_per_page' => 4, /* 表示する数 */
); ?>
<?php $my_query = new WP_Query( $args ); ?>
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
          <div class="topix-box col-sm-4 col-xs-6 grow">
            <a href="<?php the_field('topix_url'); ?>"><img class="shine-fig" src="<?php the_field('topixs_main'); ?>"></a>
          </div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>		
<!--スマホ表示end-->	
<?php else: ?>
<!--PC表示-->
<?php
$args = array(
  'post_type' => 'topix', /* カスタム投稿名が「gourmet」の場合 */
  'posts_per_page' => 3, /* 表示する数 */
); ?>
<?php $my_query = new WP_Query( $args ); ?>
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
          <div class="topix-box col-sm-4 col-xs-6 grow">
            <a href="<?php the_field('topix_url'); ?>"><img class="shine-fig" src="<?php the_field('topixs_main'); ?>"></a>
          </div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>			
<!--PC表示end-->
<?php endif; ?>	


        </div>
      </div>
    </div>
    <div class="link-botton t-more">
      <a href="<?php echo home_url(); ?>/topics-all/">
        <img src="<?php echo home_url(); ?>/img/more.png" alt="TOPICS一覧へ" onmouseover="this.src='<?php echo home_url(); ?>/img/more_on.png'" onmouseout="this.src='<?php echo home_url(); ?>/img/more_off.png'">
      </a>
    </div>
  </section>

  <div class="news_bg">
    <!--================NEWS Area =================-->

    <section class="rs-news">
      <h1 class="top-h1">NEWS</h1>
      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">
<?php if ( is_mobile() ) : ?>
<!--スマホ表示-->
			  
			  
	<?php query_posts('showposts=2');
	if (have_posts()) : while (have_posts()) : the_post(); ?>
		  
        <div class="news-box col-sm-4 js-animation">
          <div class="slide-in"><a class="newsst" href="<?php the_permalink(); ?>">
			  <?php if(has_post_thumbnail()): ?>
            <img class="shine-fig" src="<?php the_post_thumbnail_url(); ?>">
			  <?php else: ?>
			  <img class="shine-fig" src="<?php echo home_url(); ?>/img/noimage.jpg">
			  <?php endif; ?>
            <div class="mask">
            <div class="s-caption sp-none">
                <?php the_excerpt(); ?><br><span class="float-right">… 詳細はこちら</span>
              </div><!--s-caption-->
            </div><!--mask-->
			  </a>
          </div><!--slide-in-->
			<?php
// 記事のカテゴリー情報を取得する
$cat = get_the_category();

// 取得した配列から必要な情報を変数に入れる
$cat_name = $cat[0]->cat_name; // カテゴリー名
$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
$link = get_category_link($catId); // リンクURL取得
$catId = $cat[0]->cat_ID; // ID取得
$link = get_category_link($catId); // リンクURL取得
?>
          <p class="n-cate <?php echo $cat_slug ?>"><a class="newsst" href="<?php echo $link ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></a></p><?php if(get_post_meta($post->ID, 'event_day', true)): ?>
  	<p class="n-date"><?php the_field('event_day_hyoji'); ?></p></li>
<?php else : ?>
<p class="n-date">20<?php the_time('y年m月d日'); ?></p>
<?php endif; ?>
          <div class="n-title">
            <h2 class="h2-news matchHeight"><a class="ntitlest" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
        </div><!--news-box-->

		  	<?php endwhile; endif; wp_reset_query(); ?>		  
			  
<?php else: ?>
<!--PC表示-->
			<?php query_posts('showposts=3');
	if (have_posts()) : while (have_posts()) : the_post(); ?>
		  
        <div class="news-box col-sm-4 js-animation">
          <div class="slide-in"><a class="newsst" href="<?php the_permalink(); ?>">
			  <?php if(has_post_thumbnail()): ?>
            <img class="shine-fig" src="<?php the_post_thumbnail_url(); ?>">
			  <?php else: ?>
			  <img class="shine-fig" src="<?php echo home_url(); ?>/img/noimage.jpg">
			  <?php endif; ?>
            <div class="mask">
            <div class="s-caption sp-none">
                <?php the_excerpt(); ?><br><span class="float-right">… 詳細はこちら</span>
              </div><!--s-caption-->
            </div><!--mask-->
			  </a>
          </div><!--slide-in-->
			<?php
// 記事のカテゴリー情報を取得する
$cat = get_the_category();

// 取得した配列から必要な情報を変数に入れる
$cat_name = $cat[0]->cat_name; // カテゴリー名
$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
$link = get_category_link($catId); // リンクURL取得
$catId = $cat[0]->cat_ID; // ID取得
$link = get_category_link($catId); // リンクURL取得
?>
          <p class="n-cate <?php echo $cat_slug ?>"><a class="newsst" href="<?php echo $link ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></a></p><?php if(get_post_meta($post->ID, 'event_day', true)): ?>
  	<p class="n-date"><?php the_field('event_day_hyoji'); ?></p></li>
<?php else : ?>
<p class="n-date">20<?php the_time('y年m月d日'); ?></p>
<?php endif; ?>
          <div class="n-title">
            <h2 class="h2-news matchHeight"><a class="ntitlest" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
        </div><!--news-box-->

		  	<?php endwhile; endif; wp_reset_query(); ?>  
			  
			  
<?php endif; ?>		  
			  
			  

                  

          </div>
          <!--row-->
        </div>
        <!--container-fluid-->
      </div>
      <!--wrapper-->

      <div class="link-botton t-more">
        <a class="" href="<?php echo home_url(); ?>/news/">
          <img src="<?php echo home_url(); ?>/img/more.png" alt="NEWS一覧へ" onmouseover="this.src='<?php echo home_url(); ?>/img/more_on.png'" onmouseout="this.src='<?php echo home_url(); ?>/img/more_off.png'">
        </a>
      </div>
    </section>

    <!--================END NEWS Area =================-->

	  
    <!--================MOVIE Area =================-->

    <section class="rs-movie">
      <h1 class="top-h1">MOVIE</h1>
      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">

<?php if ( is_mobile() ) : ?>
<!--スマホ表示-->
<?php
$args = array(
  'post_type' => 'movie', /* カスタム投稿名が「gourmet」の場合 */
  'posts_per_page' => 2, /* 表示する数 */
); ?>
<?php else: ?>
<!--PC表示-->
<?php
$args = array(
  'post_type' => 'movie', /* カスタム投稿名が「gourmet」の場合 */
  'posts_per_page' => 4, /* 表示する数 */
); ?>
<?php endif; ?>			  
			  
			  

			  
<?php $my_query = new WP_Query( $args ); ?>
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

			  
			  
			<div class="yt-box col-sm-6 js-animation">
				 <a class="ytst" href="https://www.youtube.com/watch?v=<?php the_field('youtubeid'); ?>" data-lity="data-lity">
					 <img class="youtubeimg" src="<?php echo home_url(); ?>/img/spacer.gif" >
					 <iframe src="https://www.youtube.com/embed/<?php the_field('youtubeid'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				 </a>
			  </div>  
			
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>	
			  

			  

			  
          </div>
        </div>
      </div>
      <!--wrapper-->
      <div class="link-botton t-more">
        <a class="" href="<?php echo home_url(); ?>/movie-all">
          <img src="<?php echo home_url(); ?>/img/more.png" alt="TOPICS一覧へ" onmouseover="this.src='<?php echo home_url(); ?>/img/more_on.png'" onmouseout="this.src='<?php echo home_url(); ?>/img/more_off.png'">
        </a>
      </div>
    </section>

    <!--================END MOVIE Area =================-->


    <!--================SNS Area =================-->

    <h1 class="top-h1">SNS</h1>
    <div class="wrapper sns-area">
      
      <div class="insta-area js-animation">
        <h2 class="sns-h2"><img src="<?php echo home_url(); ?>/img/insta_logo.jpg"></h2>
		  
        <!-- InstaWidget -->
		  
	

	<div class="insta">
<div id="instafeed"></div>
		</div>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
<?php if ( is_mobile() ) : ?>
<!--スマホ表示-->
<style>
	#instafeed div{
		width: 33%;
		margin: 0 auto;
		padding: 1%;
	}
</style>
<script>
$(function(){
	$.ajax({
		type: 'GET',
		url: 'https://graph.facebook.com/v3.0/17841407114830843?fields=name%2Cmedia.limit(9)%7Bcaption%2Clike_count%2Cmedia_url%2Cpermalink%2Ctimestamp%2Cusername%7D&access_token=EAAmpkDdIOd4BAPlH57F3BrmjqPjSzs1NTwUSKgNLSZA6Ggb4Jth8v91aKsiTDrWcZBDiBASbBXBsU6oRrZCztLeJpOUm1OGjFtMvrBhtMZCcZAKYIGI99FDDhXH7UZCypTfryWopcHroqK8EGrE8kF64S0qj7ZA7LCxmxerfmT92ac46W27yd6R',
		dataType: 'json',
		success: function(json) {
		    	
		    var html = '';
		    var insta = json.media.data;
		    for (var i = 0; i < insta.length; i++) {
		    	html += '<div ><a href="' + insta[i].permalink + '" target="_blank"><img src="' + insta[i].media_url + '"></a></div>';
		    }
		      $("#instafeed").append(html);			
		},
		error: function() {

		//エラー時の処理
		}
	});
});	
</script>
<?php else: ?>
<!--PC表示-->
<style>
	#instafeed div{
		width: 25%;
		padding: 1%;
	}
</style>
<script>
$(function(){
	$.ajax({
		type: 'GET',
		url: 'https://graph.facebook.com/v3.0/17841407114830843?fields=name%2Cmedia.limit(8)%7Bcaption%2Clike_count%2Cmedia_url%2Cpermalink%2Ctimestamp%2Cusername%7D&access_token=EAAmpkDdIOd4BAPlH57F3BrmjqPjSzs1NTwUSKgNLSZA6Ggb4Jth8v91aKsiTDrWcZBDiBASbBXBsU6oRrZCztLeJpOUm1OGjFtMvrBhtMZCcZAKYIGI99FDDhXH7UZCypTfryWopcHroqK8EGrE8kF64S0qj7ZA7LCxmxerfmT92ac46W27yd6R',
		dataType: 'json',
		success: function(json) {
		    	
		    var html = '';
		    var insta = json.media.data;
		    for (var i = 0; i < insta.length; i++) {
		    	html += '<div ><a href="' + insta[i].permalink + '" target="_blank"><img src="' + insta[i].media_url + '"></a></div>';
		    }
		      $("#instafeed").append(html);			
		},
		error: function() {

		//エラー時の処理
		}
	});
});	
</script>
<?php endif; ?>

		  <!-- END InstaWidget -->
 
      </div>
      <!--insta-area-->

      <div class="container-fluid padding0 sns_layout">
        <div class="row">
          <div class="sns-box col-sm-6 js-animation">
			  <div id="twitter_layout">
            <h2 class="twi-h2"><img src="<?php echo home_url(); ?>/img/twi-logo.jpg"></h2>
				 

	  <a class="twitter-timeline twst"  data-theme="dark"  href="https://twitter.com/RamenSquare" data-widget-id="722671776858304513" data-chrome="nofooter">@RamenSquareさんのツイート</a>

	  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


			  </div>
          </div>
			
          <div class="sns-box fb-box padding0 col-sm-6 js-animation">
			  <div id="fb_layout">
            <h2 class="fb-h2"><img src="<?php echo home_url(); ?>/img/fb-logo.jpg"></h2>
            	<div class="fb-page" data-href="https://www.facebook.com/ramensquare/" data-tabs="timeline" data-width="340" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ramensquare/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ramensquare/">ラーメンスクエア</a></blockquote></div>
			  </div>
          </div>
        </div>
      </div>
    </div>
    <!--wrapper-->

    <!--================END SNS Area =================-->
  </div>
  <!--news-bg-->
<?php get_footer(); ?>