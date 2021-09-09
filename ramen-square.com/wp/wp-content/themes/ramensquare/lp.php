<?php
/*
Template Name: LP
*/
?>

<?php get_header(); ?>



  <!--position調整-->
  <div class="lay_height140"></div>

  <!--================ パンくずリスト Area =================-->

  <div class="sp-none">
    <ul class="breadcrumb">
      <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
        <a href="<?php echo home_url(); ?>" itemprop="url"><i class="fas fa-home"></i> <span itemprop="title">ラーメンスクエア トップページ</span>
        </a>
      </li>
		<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
        　>　
          <itemprop="title"><?php the_title(); ?></span>
      </li>
    </ul>
  </div>

  <!--================ END パンくずリスト Area =================-->

  <!--================NEWS一覧 Area =================-->

<link href="<?php echo home_url(); ?>/css/news.css" rel="stylesheet">

  <div class="wrapper">

<br>


	  <section class="article">
		  <h3 class="ttl_h3"><?php the_title(); ?></h3>

		  <div class="news_txt">
		  	<p><?php the_post() ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?></p>
		  </div>
		  
		   

	  </section>
	  

	  
	  <!--<div class="return"><a href="<?php echo home_url(); ?>/news">NEWS一覧へ戻る</a></div>-->
	  
</div>
    









  <!--================END NEWS一覧 Area =================-->

<?php get_footer(); ?>


