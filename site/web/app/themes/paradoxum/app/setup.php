<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     *
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    // remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});

// add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

// Woocommerce customizations

// remove tabs
add_filter( 'woocommerce_product_tabs', function( $tabs ) {

    unset( $tabs['description'] );        // Remove the description tab
    unset( $tabs['reviews'] );       // Remove the reviews tab
    unset( $tabs['additional_information'] );    // Remove the additional information tab
    return $tabs;
}, 98);

// remove short description
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

// remove title from product single
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

// Image custom size for product 
// add_filter( 'woocommerce_single_product_image_thumbnail_html', function ( $html, $attachment_id ) {
//     $image_size = 'woocommerce_single'; // Replace this with your desired image size.
//     $image_src = wp_get_attachment_image_src( $attachment_id, $image_size );
//     if ($image_src) {
//         $image_alt = esc_attr( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) );
//         $custom_class = 'woocommerce-product-gallery__image'; // Use the correct class for the WooCommerce Product Gallery Lightbox.
        
//         $html = '<a href="' . esc_url( $image_src[0] ) . '" class="' . $custom_class . '" data-rel="lightbox">';
//         $html .= '<img src="' . esc_url( $image_src[0] ) . '" alt="' . $image_alt . '" />';
//         $html .= '</a>';
        
//         return $html;
//     }
// }, 10, 2);







// Autor e conteúdo product description
add_action( 'woocommerce_single_product_summary', function() {
    echo '<span class="autor inline-block my-4 text-gray-400 text-xl classeautor">' . get_field('autor') . '</span>';  
    echo the_content();
});

// add_action( 'woocommerce_after_single_product_summary', function() {
//     $output = '<div class="product-footer">
//     <h1 class="product-footer-text">Need some additional help? Or have an enquiry?</h1>
//     <h5 class="product-footer-text"><i class="fa fa-phone"></i>  Call one of our sales team on <strong>01782</strong></h5>
//     <h5 class="product-footer-text" style="margin-top: -40px;"><i class="fa fa-envelope"></i>  Contact us via our contact page <strong><a style="color: #ffffff;" href="/../contact" target="_blank">HERE</a></strong></h5>
//     <p class="product-footer-text"><i><strong>Order note: </strong>All prices above are subject to delivery charges and VAT where applicable </i></span></p>
// </div>';
// echo $output;
// }, 12 );

