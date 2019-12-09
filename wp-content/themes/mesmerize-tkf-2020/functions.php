<?php 
    // Enqueue Scripts
    add_action( 'wp_enqueue_scripts', 'tkf_2020_load_styles' );
    function tkf_2020_load_styles() {
        // CSS
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/build/css/styles.css',
            array( 'parent-style' ),
            wp_get_theme()->get('Version')
        );
    }
    
    // SVG Upload
    function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');

    //Page Slug Body Class
    function add_slug_body_class( $classes ) {
        global $post;

        if ( isset( $post ) ) {
            $classes[] = $post->post_type . '-' . $post->post_name;
        }

        return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );
?>
