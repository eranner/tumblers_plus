<?php

function category_cards(){
    register_post_type('category_cards', [
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'public'=>true,
        'show_in_rest'=>true,
        'labels'=> [
            'name'=>'Category Cards',
            'add_new_item'=>'Add New Category Card',
            'add_new'=>'Add New Category Card',
            'edit'=>'Edit Category Card',
            'edit_item'=>'Edit Category Card',
            'all_items'=>'All Category Cards',
            'singular_name'=>'Category Card',
        ],
        'menu_icon'=> 'dashicons-portfolio'
    ]);

}

add_action('init', 'category_cards');