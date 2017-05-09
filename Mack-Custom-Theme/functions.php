<?php
    add_theme_support( 'post-thumbnails' );
    add_filter( 'pre_get_posts', 'my_get_posts' );

    function my_get_posts( $query ) {

        if ( is_home() && $query->is_main_query() )
            $query->set( 'post_type', array( 'post', 'portfolio' ) );

        return $query;
    }
?>