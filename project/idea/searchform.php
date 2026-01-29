<?php
/**
 * The searchform.php template.
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="s" class="screen-reader-text"><?php esc_html_e('Search for:', 'blog-cms-pro'); ?></label>
    <input 
        type="search" 
        id="s"
        class="search-field"
        placeholder="<?php esc_attr_e('Search...', 'blog-cms-pro'); ?>"
        name="s" 
        value="<?php echo esc_attr(get_search_query()); ?>"
    />
    <button type="submit" class="search-submit"><?php esc_html_e('Search', 'blog-cms-pro'); ?></button></form>