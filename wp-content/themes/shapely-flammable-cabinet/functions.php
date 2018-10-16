<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function font_styles()
{
    ?>
    <style type="text/css">

        @font-face{
		    font-family: "TrashHand";
		    src: url('/wp-content/themes/shapely-win/assets/fonts/TrashHand.ttf')
		}

		.site-title-container h1{
			font-family: 'TrashHand', sans-serif !important;
		}

    </style>
    <?php
}

add_action('wp_head', 'font_styles');

// track conversions in Gravity Forms
//function add_conversion_tracking_code($button, $form) {
//    $dom = new DOMDocument();
//    $dom->loadHTML($button);
//    $input = $dom->getElementsByTagName('input')->item(0);
//    if ($input->hasAttribute('onclick')) {
//        $input->setAttribute("onclick","ga('send', 'event', { eventCategory: 'Form_Submission', eventAction: 'click', eventLabel: 'win_a_shp'});".$input->getAttribute("onclick"));
//    } else {
//        $input->setAttribute("onclick","ga('send', 'event', { eventCategory: 'Form_Submission', eventAction: 'click', eventLabel: 'win_a_shp'});");
//    }
//    return $dom->saveHtml();
//}
//add_filter( 'gform_submit_button_1', 'add_conversion_tracking_code', 10, 2);

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home Product Callout 1',
        'id'            => 'home_product_callout_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'Home Product Callout 2',
        'id'            => 'home_product_callout_2',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'Home Product Callout 3',
        'id'            => 'home_product_callout_3',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


?>
