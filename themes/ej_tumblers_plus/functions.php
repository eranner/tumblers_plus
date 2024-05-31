<?php

function load_tumblers_plus_theme_files() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('Tumblers_Plus_Main_JS', get_theme_file_uri('/main.js'), array('jquery'), '1.0', true);
}

add_action('init', 'load_tumblers_plus_theme_files');


function load_category_cards() {
    $categories = new WP_Query([
        'post_type' => 'category_cards',
        'posts_per_page'=> -1,
        'order' => 'ASC'
    ]);
    $count = 0;
    $output = '<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">';
    while($categories->have_posts()){
        if($count == 0){
            $class = 'active';
        } else {
            $class = '';
        }
        $categories->the_post();
        $output.= '
        <div class="carousel-item '.$class.'">
        <a href="/product-category/'.get_field("category_slug").'/">
      <img src="'.get_field("category_photo").'" class="d-block w-100 img-fluid category-card" alt="picture of '.get_field("category_slug").'"></a>
    </div>
        ';

        $count++;
    }


    $output.= '</div></div>';
    wp_reset_postdata();

    return $output;
}

add_shortcode('category_cards', 'load_category_cards');

function load_reasons_to_buy() {
    $reasons = new WP_Query([
        'post_type' => 'reasons_to_buy',
        'posts_per_page'=> -1,
        'order' => 'ASC'
    ]);
    $output = '<div style="background: #F2E9F4;">
    <div class="container why-buy-from-us">
    <h2>Why buy from us?</h2>';
    while($reasons->have_posts()){

        $reasons->the_post();
        $output.= '       
        <div class="reason-to-buy">
            <div >
                <img class="plus-sign" src="'. get_theme_file_uri()."/photos/plus-sign.png".'" alt="" class="img-fluid">
            </div>
            <div class="reason-text">'.get_the_content().'</div>
        </div>
        ';
    }


    $output.= '</div></div>';
    wp_reset_postdata();

    return $output;
}

add_shortcode('category_cards', 'load_reasons_to_buy');