<?php
/**
 * Template part for displaying posts
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
    </header><!-- .entry-header -->

    <?php if (has_post_thumbnail()) : ?>
        <figure class="post-thumbnail">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_post_thumbnail('blog-medium', array('alt' => the_title_attribute('echo=0'))); ?>
            </a>
        </figure><!-- .post-thumbnail -->
    <?php endif; ?>

    <div class="meta-info">
        <p><?php esc_html_e('Posted on', 'blog-cms-pro'); ?> <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time> <?php esc_html_e('by', 'blog-cms-pro'); ?> <?php the_author_posts_link(); ?></p>
        
        <?php if (has_category()) : ?>
            <p><?php esc_html_e('Categories:', 'blog-cms-pro'); ?> <?php the_category(', '); ?></p>
        <?php endif; ?>
        
        <?php if (has_tag()) : ?>
            <p><?php esc_html_e('Tags:', 'blog-cms-pro'); ?> <?php the_tags('', ', '); ?></p>
        <?php endif; ?>
    </div><!-- .meta-info -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read More', 'blog-cms-pro'); ?> <span class="screen-reader-text"><?php esc_html_e('about', 'blog-cms-pro'); ?> <?php the_title(); ?></span></a>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        // Display edit post link
        edit_post_link(
            esc_html__('Edit', 'blog-cms-pro'),
            '<p class="edit-link">',
            '</p>'
        );
        ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->