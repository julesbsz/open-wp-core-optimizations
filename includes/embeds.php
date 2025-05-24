<?php
// Disable WordPress embeds (oEmbed)
if (!empty($options['disable_embeds'])) {
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    add_filter('embed_oembed_discover', '__return_false');
    add_filter('tiny_mce_plugins', function($plugins) {
        return array_diff($plugins, ['wpembed']);
    });
    remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);
}