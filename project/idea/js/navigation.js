/**
 * Navigation script for Blog + CMS Pro theme
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

(function() {
    'use strict';

    // Get the menu toggle button and menu
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.getElementById('primary-menu');

    if (!menuToggle || !primaryMenu) {
        return;
    }

    // Toggle menu visibility on button click
    menuToggle.addEventListener('click', function() {
        primaryMenu.classList.toggle('active');
        menuToggle.setAttribute('aria-expanded', primaryMenu.classList.contains('active'));
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.main-navigation')) {
            primaryMenu.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
        }
    });

    // Handle keyboard navigation
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            primaryMenu.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.focus();
        }
    });
})();
