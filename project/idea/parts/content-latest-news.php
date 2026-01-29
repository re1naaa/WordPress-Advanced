<?php
/**
 * Template part for displaying latest news items
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('latest-news-item'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <figure class="news-thumbnail">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_post_thumbnail('blog-medium', array('alt' => the_title_attribute('echo=0'))); ?>
            </a>
        </figure>
    <?php endif; ?>
    
    <header class="entry-header">
        <h3 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h3>
    </header><!-- .entry-header -->
    
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
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->