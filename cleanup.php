<?php
// Remove RSD (Really Simple Discovery), WLW and REST API links from <head>
if (!empty($options['remove_rsd_wlw'])) {
    remove_action('wp_head', 'rsd_link');             // Remote publishing
    remove_action('wp_head', 'wlwmanifest_link');     // Windows Live Writer
}

if (!empty($options['remove_rest_links'])) {
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('template_redirect', 'rest_output_link_header', 11);
}