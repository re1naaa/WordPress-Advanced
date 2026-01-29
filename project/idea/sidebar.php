<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

if (is_active_sidebar('sidebar-main')) :
    dynamic_sidebar('sidebar-main');
endif;