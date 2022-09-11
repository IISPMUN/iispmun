<?php

function load_styles_and_scripts()
{
    wp_enqueue_style( "bootstrap", get_template_directory_uri() . "/css/bootstrap/bootstrap.min.css" );
    wp_enqueue_style( "main", get_template_directory_uri() . "/css/main.css" );
    wp_enqueue_style( "header", get_template_directory_uri() . "/css/header.css" );
    wp_enqueue_style( "footer", get_template_directory_uri() . "/css/footer.css" );

    if ( get_post_type() == "iispmun_editions" ) {
        wp_enqueue_style( "single-edition", get_template_directory_uri() . "/css/single-iispmun_editions.css" );
    }

    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.min.js", "jquery" );
}

function load_custom_post_types()
{
    register_post_type( "iispmun_editions", array(
            "labels" => array(
                "name" => "Editions",
                "singular_name" => "Edition",
                "add_new" => "New Edition",
                "add_new_item" => "Add New Edition",
                "edit_item" => "Edit Edition",
                "new_item" => "New Edition",
                "view_item" => "View Edition",
                "view_items" => "View Editions",
                "search_items" => "Search Editions",
                "not_found" => "No editions found",
                "not_found_in_trash" => "No editions found in trash",
                "all_items" => "All Editions",
                "archives" => "Edition Archives",
                "attributes" => "Edition Attributes",
                "insert_into_item" => "\Insert into edition",
                "uploaded_to_this_item" => "Uploaded to this edition",
                "filter_items_list" => "Filter editions list",
                "items_list_navigation" => "Editions list navigation",
                "items_list" => "Editions list",
                "item_published" => "Edition published",
                "item_published_privately" => "Edition published privately",
                "item_reverted_to_draft" => "Edition reverted to draft",
                "item_scheduled" => "Edition scheduled",
                "item_updated" => "Edition updated",
                "item_link" => "Edition Link",
                "item_link_description" => "A link to an edition"),

            "description" => "All the editions of the IISP MUN",
            "public" => true,
            "menu_icon" => "dashicons-tickets-alt",
            "supports" => array( "custom-fields", "title" ),
            "has_archive" => true,
            "rewrite" => array( "slug" => "mun" ),
        )
    );

    register_post_type( "iispmun_committees", array(
            "labels" => array(
                "name" => "Committees",
                "singular_name" => "Committee",
                "add_new" => "New Committee",
                "add_new_item" => "Add New Committee",
                "edit_item" => "Edit Committee",
                "new_item" => "New Committee",
                "view_item" => "View Committee",
                "view_items" => "View Committees",
                "search_items" => "Search Committees",
                "not_found" => "No committees found",
                "not_found_in_trash" => "No committees found in trash",
                "all_items" => "All Committees",
                "archives" => "Committee Archives",
                "attributes" => "Committee Attributes",
                "insert_into_item" => "\Insert into committee",
                "uploaded_to_this_item" => "Uploaded to this committee",
                "filter_items_list" => "Filter committees list",
                "items_list_navigation" => "Committees list navigation",
                "items_list" => "Committees list",
                "item_published" => "Committee published",
                "item_published_privately" => "Committee published privately",
                "item_reverted_to_draft" => "Committee reverted to draft",
                "item_scheduled" => "Committee scheduled",
                "item_updated" => "Committee updated",
                "item_link" => "Committee Link",
                "item_link_description" => "A link to an committee"),

            "description" => "All the committees of the IISP MUN",
            "public" => true,
            "menu_icon" => "dashicons-admin-site",
            "supports" => array( "custom-fields", "title" ),
            "rewrite" => array( "slug" => "committees" )
        )
    );

    register_post_type( "iispmun_socials", array(
            "labels" => array(
                "name" => "Social Platforms",
                "singular_name" => "Social Platform",
                "add_new" => "New Social Platform",
                "add_new_item" => "Add New Social Platform",
                "edit_item" => "Edit Social Platform",
                "new_item" => "New Social Platform",
                "view_item" => "View Social Platform",
                "view_items" => "View Social Platforms",
                "search_items" => "Search Social Platforms",
                "not_found" => "No social platforms found",
                "not_found_in_trash" => "No social platforms found in trash",
                "all_items" => "All Social Platforms",
                "archives" => "Social Platform Archives",
                "attributes" => "Social Platform Attributes",
                "insert_into_item" => "\Insert into social platform",
                "uploaded_to_this_item" => "Uploaded to this social platform",
                "filter_items_list" => "Filter social platforms list",
                "items_list_navigation" => "Social Platforms list navigation",
                "items_list" => "Social Platforms list",
                "item_published" => "Social Platform published",
                "item_published_privately" => "Social Platform published privately",
                "item_reverted_to_draft" => "Social Platform reverted to draft",
                "item_scheduled" => "Social Platform scheduled",
                "item_updated" => "Social Platform updated",
                "item_link" => "Social Platform Link",
                "item_link_description" => "A link to an social platform"),

            "description" => "All the social media platforms of the IISP MUN",
            "public" => true,
            "exclude_from_search" => true,
            "publicly_queryable" => false,
            "menu_icon" => "dashicons-share",
            "supports" => array( "custom-fields", "title" ),
        )
    );

    register_post_type( "iispmun_people", array(
            "labels" => array(
                "name" => "People",
                "singular_name" => "Person",
                "add_new" => "New Person",
                "add_new_item" => "Add New Person",
                "edit_item" => "Edit Person",
                "new_item" => "New Person",
                "view_item" => "View Person",
                "view_items" => "View People",
                "search_items" => "Search People",
                "not_found" => "No people found",
                "not_found_in_trash" => "No people found in trash",
                "all_items" => "All People",
                "archives" => "Person Archives",
                "attributes" => "Person Attributes",
                "insert_into_item" => "\Insert into person",
                "uploaded_to_this_item" => "Uploaded to this person",
                "filter_items_list" => "Filter people list",
                "items_list_navigation" => "People list navigation",
                "items_list" => "People list",
                "item_published" => "Person published",
                "item_published_privately" => "Person published privately",
                "item_reverted_to_draft" => "Person reverted to draft",
                "item_scheduled" => "Person scheduled",
                "item_updated" => "Person updated",
                "item_link" => "Person Link",
                "item_link_description" => "A link to an person"),

            "description" => "All the people involved in the IISP MUN",
            "public" => true,
            "menu_icon" => "dashicons-businessperson",
            "supports" => array( "custom-fields", "title" ),
            "rewrite" => array( "slug" => "people" )
        )
    );
}

function remove_admin_bar()
{
    show_admin_bar(false);
}

add_action( "wp_enqueue_scripts", "load_styles_and_scripts" );
add_action( "init", "load_custom_post_types");
add_action( "after_setup_theme", "remove_admin_bar" );

add_theme_support( "menus" );
add_theme_support( "custom-logo" );
add_theme_support( 'post-thumbnails' );