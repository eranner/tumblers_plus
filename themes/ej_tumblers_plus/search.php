<?php 
require('includes/header.php');
require('includes/navbar.php');

?>

<main id="main" class="site-main">
    <header class="page-header">
        <h1 class="page-title">
            <?php printf( esc_html__( 'Search Results for: %s', 'textdomain' ), '<span>' . get_search_query() . '</span>' ); ?>
        </h1>
    </header>

    <?php if ( have_posts() ) : ?>
        <div class="search-results container">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                        <div class="search-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'thumbnail' ); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>
        </div>
    <?php else : ?>
        <section class="no-results not-found container">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'textdomain' ); ?></h1>
            </header>
            <div class="page-content">
                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'textdomain' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>
    <?php endif; ?>
</main>
<?php
require('includes/cta.php');
require('includes/footer.php');