<?php
/**
 * Template part for displaying single posts
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="meta-info">
            <p><?php esc_html_e('Posted on', 'blog-cms-pro'); ?> <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time> <?php esc_html_e('by', 'blog-cms-pro'); ?> <?php the_author_posts_link(); ?></p>
            
            <?php if (has_category()) : ?>
                <p><?php esc_html_e('Categories:', 'blog-cms-pro'); ?> <?php the_category(', '); ?></p>
            <?php endif; ?>
            
            <?php if (has_tag()) : ?>
                <p><?php esc_html_e('Tags:', 'blog-cms-pro'); ?> <?php the_tags('', ', '); ?></p>
            <?php endif; ?>
        </div><!-- .meta-info -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'blog-cms-pro'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        // Display post navigation if available
        the_post_navigation(array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous Post:', 'blog-cms-pro') . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__('Next Post:', 'blog-cms-pro') . '</span> <span class="nav-title">%title</span>',
        ));
        
        // Display edit post link
        edit_post_link(
            esc_html__('Edit this post', 'blog-cms-pro'),
            '<p class="edit-link">',
            '</p>'
        );
        ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
