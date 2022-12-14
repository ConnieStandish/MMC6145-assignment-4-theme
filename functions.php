<?php
/*================================
Adding stylesheets and js files
=================================*/
function starter_theme_scripts(){
  //Bootstrap CSS
  wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

  //Main CSS
  wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

  //JS Files
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'starter_theme_scripts');

/*================================
Add featured images to website
=================================*/
add_theme_support('post-thumbnails');

/*================================
Remove error
=================================*/
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

/*================================
Custom Logo Header
=================================*/
$custom_logo_header = array(
  'width'   => 176,
  'height'  => 52,
  'uploads' => true
);

add_theme_support('custom-header', $custom_logo_header);

/*================================
Register/create menus
=================================*/
function register_menus(){
  register_nav_menus(array(
    'main-menu' => __('Main Menu'),
    'footer-left' => __('Left Footer Menu'),
    'footer-middle' => __('Middle Footer Menu'),
    'footer-right' => __('Right Footer Menu')
  ));
}

add_action('init', 'register_menus');

/*================================
Post Archive Data
=================================*/
function post_data(){
  $archive_year = get_the_time('Y');
  $archive_month = get_the_time('m');
  $archive_day = get_the_time('d');
  ?>
  <p>Written By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a> | Published On: <a href="<?php echo get_day_link($archive_year,$archive_month,$archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a></p>
  <?php
}
?>
