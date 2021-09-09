<?php
/*
Template Name: 記事
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
          <a href="<?php echo home_url(); ?>/news" itemprop="url"><itemprop="title">NEWS一覧</span> </a>
      </li>
		<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
        　>　
          <itemprop="title"><?php the_title(); ?></span>
      </li>
    </ul>
  </div>

  <!--================ END パンくずリスト Area =================-->

  <!--================NEWS一覧 Area =================-->


  <div class="wrapper">

	  <h2 class="news-archive-h1"><a href="<?php echo home_url(); ?>/news"><img src="<?php echo home_url(); ?>/img/news-archive-h1.png" alt="NEWS"></a></h2>

	  <section class="article">
		  <h3 class="ttl_h3"><?php the_title(); ?></h3>
		  <ul class="sub_ttl">
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
		  	<li><p class="n-cate <?php echo $cat_slug ?>"><a style="display: block; color: inherit;" href="<?php echo $link ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></a></p></li>
		  
			  
<?php if(get_post_meta($post->ID, 'event_day', true)): ?>
  	<li class="date"><p>イベント日：<?php the_field('event_day_hyoji'); ?></p></li>
<?php else : ?>
  	<li class="date"><p>20<?php the_time('y年m月d日'); ?></p></li>
<?php endif; ?>
  
		  </ul>
		  <div class="news_txt">
		  	<p><?php the_post() ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?></p>
		  </div>
		  
		  
		  
		  
		  
		  
		   <?php if(get_post_meta($post->ID, 'event_day', true)): ?>
		  <div class="date_n_hour">
		  	<dl>
		  		<dt>開催日時</dt>
				<dd><?php the_field('event_day'); ?></dd>
				<dt>開催場所</dt>
		  		<dd><?php the_field('event_place'); ?></dd>
		  	</dl>
		</div>
		  <?php endif; ?>
		  
		  
		  
		  <?php if(get_post_meta($post->ID, 'news_img', true)): ?>
		  <div class="news_img">
			  <?php if(get_post_meta($post->ID, 'news_img_url', true)): ?>
			  <a href="<?php the_field('news_img_url'); ?>">
				  <?php endif; ?>
		  	<img src="<?php the_field('news_img'); ?>" alt="メイン画像">
				<?php if(get_post_meta($post->ID, 'news_img_url', true)): ?></a><?php endif; ?>
		  </div>
		  <?php endif; ?>

	  </section>
	  

	  
	  <!--<div class="return"><a href="<?php echo home_url(); ?>/news">NEWS一覧へ戻る</a></div>-->
	  
</div>
    
  <!--ページネーション-->
  <div class="pager">
    <ul class="pagination">
		<?php
		if ($the_query->max_num_pages > 1) {
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => '/page/%#%/',
				'current' => max(1, $paged),
				'type' => 'list',
				'total' => $the_query->max_num_pages,
				'prev_text' => '«',
    			'next_text' => '»',
			));
		}
		wp_reset_postdata();
		?>
    </ul>
  </div>








  <!--================END NEWS一覧 Area =================-->

<?php get_footer(); ?>


