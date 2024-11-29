<?php 
add_action('wp_enqueue_scripts','add_styles');
function add_styles(){
    wp_enqueue_style('fontawsome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',array(),'1.0.0');
    wp_enqueue_style('style',get_template_directory_uri().'/style.css',array(),'1.0.0');




    wp_enqueue_script('js',get_template_directory_uri().'/js/script.js', array(),'1.0.0',false);
}

add_action('init','add_menu_site');
function add_menu_site(){
    register_nav_menus(
        array(
            'top_menu' => __('منو اصلی'),
        )
        );
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ){
	add_image_size( 'imageProd', 358, 358, true );
}


if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'فوتر',
		'id'   => 'footer-site',
		'description'   => 'شما می توانید از این قسمت فوتر سایت را مدیریت کنید',
		'before_widget' => '<div class="box">',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'after_widget'  => '</div>'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'مدیریت نظرات',
		'id'   => 'comments-site',
		'description'   => 'شما می توانید از این قسمت نظرات سایت را مدیریت کنید',
		'before_widget' => '<div class="box-container"><div class="box">',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'after_widget'  => '</div></div>'
	));
}

// if (function_exists('register_sidebar')) {
//     register_sidebar(array(
//         'name' => 'بنر بالای صفحه',
//         'id'   => 'topposter',
//         'description'   => 'از این قسمت می توانید پوستر یا همان بنر بالای صفحه را اصلاح و تغییر بدهید.',
//         'before_widget' => '<div class="slide">',
//         'before_title'  => '<div class="content"><h3>',
//         'after_title'   => '</h3><p></p><a href="" class="btn">اطلاعات بیشتر</a></div>',
//         'after_widget'  => '</div>'
//     ));
// }










































?>