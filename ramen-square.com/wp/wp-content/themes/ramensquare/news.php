<?php
/*
Template Name: news
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
          <itemprop="title">News一覧</span>
        
      </li>
    </ul>
  </div>

  <!--================ END パンくずリスト Area =================-->

  <!--================NEWS一覧 Area =================-->

  <section class="r-news-archive">
	  

	  
	  <section class="news_title">
	  	<h2><img src="<?php echo home_url(); ?>/img/news-archive-h1.png"></h2>
	  </section>
	  
	  
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">
			
			
			<?php
$paged = (int) get_query_var('paged');
$args = array(
    'posts_per_page' => 9,
    'paged' => $paged,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
        get_template_part( 'news_list', get_post_format() );
    endwhile;
endif;
wp_reset_postdata();
?>
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


