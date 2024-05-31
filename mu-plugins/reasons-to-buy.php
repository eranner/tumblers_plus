<?php

function reasons_to_buy(){
    register_post_type('reasons_to_buy', [
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'public'=>true,
        'show_in_rest'=>true,
        'labels'=> [
            'name'=>'Reasons To Buy',
            'add_new_item'=>'Add New Reason To Buy',
            'add_new'=>'Add New Reason To Buy',
            'edit'=>'Edit Reason To Buy',
            'edit_item'=>'Edit Reason To Buy',
            'all_items'=>'All Reasons To Buy',
            'singular_name'=>'Reason To Buy',
        ],
        'menu_icon'=> 'dashicons-yes-alt'
    ]);

}

add_action('init', 'reasons_to_buy');