<?php


function change_post_menu_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'ニュース';
  $submenu['edit.php'][5][0] = 'ニュース一覧';
  $submenu['edit.php'][10][0] = '新しいニュース';
  $submenu['edit.php'][16][0] = 'タグ';
}

function change_post_object_label() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'ニュース';
  $labels->singular_name = 'ニュース';
  $labels->add_new = _x('追加', 'ニュース');
  $labels->add_new_item = 'ニュースの新規追加';
  $labels->edit_item = 'ニュースの編集';
  $labels->new_item = '新規ニュース';
  $labels->view_item = 'ニュースを表示';
  $labels->search_items = 'ニュースを検索';
  $labels->not_found = '記事が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

// トピックス投稿追加
function add_topix_type() {
	$args = array(
		'label' => 'トピックス',
		'public' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'has_archive' => true,
		'rewrite' => true,
		'supports' => array('title','thumbnail'),
	);
	register_post_type('topix', $args);
}
add_action('init', 'add_topix_type');

// トピックス投稿　タクソノミー
function create_topix_archive_taxonomies() {
	register_taxonomy(
		'topix_cat',
		'topix',
		array(
			'label' => 'カテゴリー',
			'public' => true,
			'show_ui' => true,
			'hierarchical' => true,
			'rewrite' => true,
			'query_var' => true
		)
	);
}
add_action('init', 'create_topix_archive_taxonomies', 0);


// ムービー投稿追加
function add_movie_type() {
	$args = array(
		'label' => 'ムービー',
		'public' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'has_archive' => true,
		'rewrite' => true,
		'supports' => array('title','thumbnail'),
	);
	register_post_type('movie', $args);
}
add_action('init', 'add_movie_type');

// アイキャッチ画像の表示の仕方を指定（リサイズ）
//set_post_thumbnail_size( 600, 424, true );
add_theme_support('post-thumbnails');



function my_awesome_image_resize_dimensions( $payload, $orig_w, $orig_h, $dest_w, $dest_h, $crop ){
	if( false ) return $payload;

	if ( $crop ) {
		$aspect_ratio = $orig_w / $orig_h;
		$new_w = min($dest_w, $orig_w);
		$new_h = min($dest_h, $orig_h);

		if ( !$new_w ) $new_w = intval($new_h * $aspect_ratio);
		if ( !$new_h ) $new_h = intval($new_w / $aspect_ratio);

		$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
		$crop_w = round($new_w / $size_ratio);
		$crop_h = round($new_h / $size_ratio);

		$s_x = 0;
		$s_y = 0;
	} else {
		$crop_w = $orig_w;
		$crop_h = $orig_h;

		$s_x = 0;
		$s_y = 0;

		list( $new_w, $new_h ) = wp_constrain_dimensions( $orig_w, $orig_h, $dest_w, $dest_h );
	}

	if ( $new_w >= $orig_w && $new_h >= $orig_h ) return false;
	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'my_awesome_image_resize_dimensions', 10, 6 );



//概要（抜粋）の省略文字
 function my_excerpt_more($more) {
 return '…';
 }
 add_filter('excerpt_more', 'my_excerpt_more');

 //「抜粋」the_excerptの文字数を変更
function new_excerpt_mblength($length) {
     return 90; // 抜粋で表示したい文字数
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');


/**
 * 固定ページのみ自動整形機能を無効化します。
 */
function disable_page_wpautop() {
	if ( is_page() ) remove_filter( 'the_content', 'wpautop' );
}
add_action( 'wp', 'disable_page_wpautop' );

/*ショートコード サイトURL：[url]*/
function shortcode_url() {
    return get_bloginfo('url');
}
add_shortcode('url', 'shortcode_url');



/*ショートコード テンプレートURL：[t_url]*/
function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
add_shortcode('t_url', 'shortcode_templateurl');

function is_mobile() {
	$useragents = array(
	'iPhone',
	'iPod',
	'Android',
	'dream',
	'CUPCAKE',
	'blackberry9500',
	'blackberry9530',
	'blackberry9520',
	'blackberry9550',
	'blackberry9800',
	'webOS',
	'incognito',
	'webmate'
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
