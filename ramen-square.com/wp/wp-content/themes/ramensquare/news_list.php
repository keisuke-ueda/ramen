

        <div class="news-box col-sm-4">
          <div class="slide-in"><a style="display: block; color: inherit;" href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?>
            <img class="shine-fig" src="<?php the_post_thumbnail_url(); ?>">
			  <?php else: ?>
			  <img class="shine-fig" src="<?php echo home_url(); ?>/img/noimage.jpg">
			  <?php endif; ?>
            <div class="mask">
            <div class="s-caption sp-none">
                <?php the_excerpt(); ?><br><span class="float-right">詳細はこちら</span>
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
          <p class="n-cate <?php echo $cat_slug ?>"><a style="display: block; color: inherit;" href="<?php echo $link ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></a></p><?php if(get_post_meta($post->ID, 'event_day', true)): ?>
  	<p class="n-date"><?php the_field('event_day_hyoji'); ?></p></li>
<?php else : ?>
<p class="n-date">20<?php the_time('y年m月d日'); ?></p>
<?php endif; ?>
          <div class="n-title">
            <h2 class="h2-news matchHeight"><a style="color: inherit;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
        </div><!--news-box-->
