<?php
/*
Template Name: topix
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
          <itemprop="title">Topics一覧</span>

      </li>
    </ul>
  </div>

  <!--================ END パンくずリスト Area =================-->

  <!--================NEWS一覧 Area =================-->

  <section class="r-news-archive">

	  <section class="news_title">
	  	<h2><img src="<?php echo home_url(); ?>/img/topix/tit_topix.png" alt="topix"></h2>
	  </section>

    <div class="wrapper">
      <div class="container-fluid">
        <div class="row contents-layout">


			<?php
$args = array(
  'post_type' => 'topix', /* カスタム投稿名が「gourmet」の場合 */
  'posts_per_page' => 9999, /* 表示する数 */
); ?>
<?php $my_query = new WP_Query( $args ); ?>
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
          <div class="topix-box col-sm-4 col-xs-6 grow">
            <a href="<?php the_field('topix_url'); ?>"><img class="shine-fig" src="<?php the_field('topixs_main'); ?>"></a>
          </div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
              <!-- //記事一覧 -->
            </div>

        </div>
        <!--row-->
      </div>
      <!--container-fluid-->


    </div>
    <!--wrapper-->

  </section>
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
