<?php

  
//ウィジェット追加
if ( function_exists('register_sidebar') )
    register_sidebar();
  
add_theme_support( 'post-thumbnails' );// 機能の宣言
  
//トップページアイキャッチサイズ
/*add_image_size('top-page', 280, 210, true);*/
  
//アーカイブアイキャッチサイズ
/*add_image_size('archive-page', 150, 150, true);*/
  
//ヘッダー節約
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
  
//excerpt
function new_excerpt_mblength($length) {
     return 140;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');
  
//画像キャプション取得
$image_excerpt = get_post( get_post_thumbnail_id() )->post_excerpt;
echo $image_excerpt;
  
//svg
  
function my_ext2type($ext2types) {
    array_push($ext2types, array('image' => array('svg', 'svgz')));
    return $ext2types;
}
add_filter('ext2type', 'my_ext2type');
   
function my_mime_types($mimes){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'my_mime_types');
   
function my_mime_to_ext($mime_to_ext) {
    $mime_to_ext['image/svg+xml'] = 'svg';
    return $mime_to_ext;
}
add_filter('getimagesize_mimes_to_exts', 'my_mime_to_ext');
 
//カテゴリー説明文でHTMLタグを使う
remove_filter( 'pre_term_description', 'wp_filter_kses' );

//テキストエディタの一部機能無効化
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
    global $post;
    $remove_filter = false;
      
    $arr_types = array('page'); //自動整形を無効にする投稿タイプを記述
    $post_type = get_post_type( $post->ID );
    if (in_array($post_type, $arr_types)) $remove_filter = true;
      
    if ( $remove_filter ) {
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
    }
      
    return $content;
}

//概要（抜粋）の省略文字
function my_excerpt_more($more) {
    return '…';
}
add_filter('excerpt_more', 'my_excerpt_more');

//  テーマ更新非表示
remove_action( 'load-update-core.php', 'wp_update_themes' );
add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) );


/* ==============================
    バージョンアップ通知を非表示に
============================== */
function update_nag_hide() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action( 'admin_init', 'update_nag_hide' );


function TinyMceInitOptions4BrOnly( $initArray )
{
    $initArray = array_merge( $initArray,  array('force_br_newlines' =>  true) );
    $initArray = array_merge( $initArray,  array('forced_root_block' => '') );
    $initArray = array_merge( $initArray,  array('force_p_newlines' => false) );
    return $initArray;
}
 


/* ==============================
    投稿のimgに独自class追加  (lightcase用)
============================== */
add_filter( 'image_send_to_editor', 'addClass' );
function addClass( $html ) {
    $lightcase = 'lightcase'; // ←付けたいクラス名が入ります。
    if(preg_match('/<a href="https?:\/\/+[-_.\/a-zA-Z0-9]+(?:png|jpg|jpeg|gif)"><img/' , $html)){
        $html = str_replace( '<a ', '<a class="lightcase-image" data-rel="'. $lightcase. '" ', $html );
    }
    return $html;
}


/* ==============================
    iphoneのカメラ用比率にアイキャッチ変換
============================== */
add_image_size('top_thumbnail', 600, 450, true);
// $get_size: 取得する画像のサイズ
// $altimg_id: 代替画像のID。（画像はあらかじめメディアライブラリからアップロードしておく）
//             nullの場合、投稿内に画像が無ければ何も出力しない
function catch_thumbnail_image($get_size = 'top_thumbnail', $altimg_id = null) {
    global $post;
    $image = '';
    $image_get = preg_match_all( '/<img.+class=[\'"].*wp-image-([0-9]+).*[\'"].*>/i', $post->post_content, $matches );
    $image_id = $matches[1][0];
    if( !$image_id && $altimg_id ){
        $image_id = $altimg_id;
    }
    $image = wp_get_attachment_image( $image_id, $get_size, false, array(
        'class' => 'thumbnail-image',
        'srcset' => wp_get_attachment_image_srcset( $image_id, $get_size ),
        'sizes' => wp_get_attachment_image_sizes( $image_id, $get_size )
    ) );
    if( empty($image) ) {
        $image = '<img src="test.jpg">';
    }
    return $image;
}
/* ==============================
    og:image用
============================== */
add_image_size('og_top_thumbnail', 600, 450, true);
// $get_size: 取得する画像のサイズ
// $altimg_id: 代替画像のID。（画像はあらかじめメディアライブラリからアップロードしておく）
//             nullの場合、投稿内に画像が無ければ何も出力しない
function og_image($og_get_size = 'og_top_thumbnail', $og_altimg_id = null) {
    global $post;
    $og_image = '';
    $og_image_get = preg_match_all( '/<img.+class=[\'"].*wp-image-([0-9]+).*[\'"].*>/i', $post->post_content, $og_matches );
    $og_image_id = $og_matches[1][0];
    if( !$og_image_id && $og_altimg_id ){
        $og_image_id = $og_altimg_id;
    }
    $og_image = wp_get_attachment_url( $og_image_id, $og_get_size, false );
    if( empty($og_image) ) {
        $og_image = 'https://bransic.net/20200318_new/wp-content/themes/wordpress/images/thumbnail.png';
    }
    return $og_image;
}



/* ==============================
    ビジュアルエディタ用css読み込み
============================== */
// テーマフォルダ直下のeditor-style.cssを読み込み
add_action('admin_init',function(){
    add_editor_style();
});

/* エディタースタイルのキャッシュクリア */
function extend_tiny_mce_before_init($mce_init){
    $mce_init['cache_suffix']='v='.time();
    return $mce_init;    
}
add_filter('tiny_mce_before_init','extend_tiny_mce_before_init');


/* ==============================
    投稿のアーカイブページ設定
============================== */
add_filter('register_post_type_args', function($args, $post_type) {
    if ('post' == $post_type) {
        global $wp_rewrite;
        $archive_slug = 'information';
        $args['label'] = 'information';
        $args['has_archive'] = $archive_slug;
        $archive_slug = $wp_rewrite->root.$archive_slug;
        $feeds = '(' . trim( implode('|', $wp_rewrite->feeds) ) . ')';
        add_rewrite_rule("{$archive_slug}/?$", "index.php?post_type={$post_type}", 'top');
        add_rewrite_rule("{$archive_slug}/feed/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
        add_rewrite_rule("{$archive_slug}/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
        add_rewrite_rule("{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type={$post_type}".'&paged=$matches[1]', 'top');
    }
    return $args;
}, 10, 2);



/* ==============================
    archive ページネーション
============================== */
function the_pagination() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '<i class="fas fa-caret-left"></i>',
    'next_text'    => '<i class="fas fa-caret-right"></i>',
    'type'         => 'list',
    'end_size'     => 1,
    'mid_size'     => 2
  ) );
  echo '</nav>';
}


/* ==============================
    search.phpのパーマリンク変更
============================== */
add_action( 'template_redirect', 'nxw_change_search_result_url' );
function nxw_change_search_result_url() {
  if ( is_search() && ! empty( $_GET['s'] ) ) {
    wp_safe_redirect( home_url( '/search/' ) . urlencode( get_query_var( 's' ) ) );
    exit();
  }
}
/* ==============================
    search.phpの範囲対象
============================== */
function search_exclude_custom_post_type( $query ) {
    if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
        $query->set( 'post_type', array( 'post' ) );
    }
}
add_filter( 'pre_get_posts', 'search_exclude_custom_post_type' );


/* ==============================
    <title>自動生成
============================== */
add_theme_support( 'title-tag' );

/* ==============================
    サイトマップの自動生成
============================== */
add_action('publish_post', 'create_sitemap');
add_action('publish_page', 'create_sitemap');
function create_sitemap() {
$sitemap_posts = get_posts(array(
'numberposts' => -1,
'orderby' => 'modified',
'post_type' => array('post','page','information'), // Add custom post types here
'order' => 'DESC'
));
$sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
$sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach($sitemap_posts as $post) {
setup_postdata($post);
$postdate = explode(" ", $post->post_modified);
$sitemap .= '<url>'.
'<loc>'. get_permalink($post->ID) .'</loc>'.
'<lastmod>'. $postdate[0] .'</lastmod>'.
'<changefreq>weekly</changefreq>'.
'<priority>0.8</priority>' . 
'</url>';
}
$sitemap .= '</urlset>';
$fp = fopen(ABSPATH . "sitemap.xml", 'w');
fwrite($fp, $sitemap);
fclose($fp);
} 



function add_admin_css_js() {
  wp_enqueue_style( 'admin_style', get_template_directory_uri() . '/css/admin.css' );
  wp_enqueue_script( 'admin_script', get_template_directory_uri() . '/js/admin.js', array(), '1.0.0', true );
  wp_enqueue_script( 'admin_script_jq', get_template_directory_uri() . '/js/admin.js', array('jquery'), '1.0.0', true ); //jQueryの場合
}
add_action( 'admin_enqueue_scripts', 'add_admin_css_js' );

add_theme_support( 'title-tag' );

/* ==============================
    管理画面にcss追加
============================== */
function my_admin_style() {
  echo '<style>
.post-type-engineer #postbox-container-1,.post-type-composer_musician #postbox-container-1{
    position: fixed;
    right: 0%;
    margin-right: 0!important;
} 
  </style>'.PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');


$allowed_html = array(
    'a' => array(
        'href' => array (),
        'target' => array()
    ),
    'li' => array(),
);

add_filter( 'override_post_lock', '__return_false' );


/* ==============================
    Artistに動画ポップアップ用のjsとcssを追加
============================== */
function add_css_js() {
    if (get_post_type() == 'artist') {
        wp_enqueue_style('modal-video-style', get_stylesheet_directory_uri().'/css/modal-video.min.css');
        wp_enqueue_script('modal-video-script', get_stylesheet_directory_uri().'/js/jquery-modal-video.min.js', array('jquery'));
    }
}
add_action( 'wp_enqueue_scripts', 'add_css_js' );

/* ==============================
    ArtistNewsの記事とArtistの記事とを関連付け
============================== */
function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'artist_news_to_artist',
        'from' => 'artist_news',
        'to' => 'artist'
        ) );
}
add_action( 'p2p_init', 'my_connection_types' );