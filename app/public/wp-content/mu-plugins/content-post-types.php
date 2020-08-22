<?php
    function content_post_types() {

         // Campus post type
        register_post_type('campus', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'rewrite' => array('slug' => 'campuses'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Campuses',
                'add_new_item' => 'Add New Campus',
                'edit_item' => 'Edit Campus',
                'all_items' => 'All Campuses',
                'singular_name' => 'Campus'
            ),
            'menu_icon' => 'dashicons-location-alt'
        ));


        // Events post type
        register_post_type('event', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'rewrite' => array('slug' => 'events'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event'
            ),
            'menu_icon' => 'dashicons-calendar'
        ));

        // Program post type
        register_post_type('program', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'programs'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Programs',
                'add_new_item' => 'Add New Proram',
                'edit_item' => 'Edit Program',
                'all_items' => 'All Programs',
                'singular_name' => 'Program'

            ),
            'menu_icon' => 'dashicons-awards'
        ));

        // Teacher post type
        register_post_type('teacher', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor','thumbnail'),
            'rewrite' => array('slug' => 'teachers'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Teachers',
                'add_new_item' => 'Add New Teacher',
                'edit_item' => 'Edit Teacher',
                'all_items' => 'All Teachers',
                'singular_name' => 'Teacher'

            ),
            'menu_icon' => 'dashicons-welcome-learn-more'
        ));
    }

    add_action('init', 'content_post_types'); 