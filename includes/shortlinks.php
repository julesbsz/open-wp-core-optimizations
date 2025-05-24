<?php
// Remove shortlink from HTML head
if (!empty($options['remove_shortlinks'])) {
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
}