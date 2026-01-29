<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Blog_Plus_CMS_Pro
 * @since 1.0
 */
?>
        </main><!-- #main -->

        <aside id="secondary" class="widget-area">
            <?php get_sidebar(); ?>
        </aside><!-- #secondary -->

        <footer id="colophon" class="site-footer">
            <div class="site-info">
                <nav id="footer-navigation" class="footer-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer_menu',
                            'fallback_cb'    => false,
                            'depth'          => 1,
                        )
                    );
                    ?>
                </nav>
                <p>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'blog-cms-pro'); ?></p>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
</body>
</html>
