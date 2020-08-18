<?php 
    function primary_school_files() {
        // wp_enqueue_script('primary-main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL,'1.0', true );
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('fonts-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        // wp_enqueue_style('primary_main_files', get_stylesheet_uri());

        if (strstr($_SERVER['SERVER_NAME'], 'i-aun-school.local')) {
             wp_enqueue_script('primary-main-js', 'http://localhost:3000/bundled.js', NULL,'1.0', true );
        } else {
            wp_enqueue_script('vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL,'1.0', true );
            wp_enqueue_script('primary-main-js', get_theme_file_uri('/bundled-assets/scripts.cadac3d75c965bd1a20a.js'), NULL,'1.0', true );
            wp_enqueue_style('main_styles', get_stylesheet_uri('/bundled-assets/styles.cadac3d75c965bd1a20a.css'));
        }
        
    }
    add_action('wp_enqueue_scripts', 'primary_school_files');


    function primary_school_features() {
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
        register_nav_menu('footerLinksOne', 'Footer Location Links One');
        register_nav_menu('footerLinksTwo', 'Footer Location Links Two');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('teacherLandscape', 400, 260, true);
        add_image_size('teacherPortrait', 480, 650, true);
        add_image_size('pageBanner', 1500, 350, true);
    }
    add_action('after_setup_theme', 'primary_school_features');


    function content_adjust_queries($query) {
        if (!is_admin() AND is_post_type_archive() AND $query->is_main_query()){
            $query->set('posts_per_page', -1);
            $query-> set('orderby', 'title');
            $query-> set('order', 'ASC');
        }

        if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
            $today = date('Ymd');
            // $query-> set('posts_per_page', -1);
            $query-> set('meta_key', 'event_date');
            $query-> set('orderby', 'meta_value_num');
            $query-> set('order', 'ASC');
            $query-> set('meta_query', array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                ));
        }   
    }

    add_action('pre_get_posts', 'content_adjust_queries');

