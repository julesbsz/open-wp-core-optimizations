<?php
// Remove WordPress version from <meta> tag
if (!empty($options['remove_wp_version'])) {
    remove_action('wp_head', 'wp_generator');
}