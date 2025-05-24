<?php

// Register admin page
add_action('admin_menu', function () {
    add_management_page(
        'WP Core Optimizations',
        'Optimizations',
        'manage_options',
        'ocwp-optimizations',
        'ocwp_render_admin_page'
    );
});

// Load settings page
function ocwp_render_admin_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    $all_options = [
        'disable_emojis'     => [
            'title' => 'Disable Emoji Support',
            'description' => 'Removes emoji detection scripts and styles to improve performance'
        ],
        'disable_embeds'     => [
            'title' => 'Disable oEmbed',
            'description' => 'Prevents automatic embedding of external content (YouTube, Twitter, etc.) to reduce HTTP requests'
        ],
        'disable_rest_api'   => [
            'title' => 'Disable REST API',
            'description' => 'Disables WordPress REST API access for improved security'
        ],
        'disable_xmlrpc'     => [
            'title' => 'Disable XML-RPC',
            'description' => 'Disables XML-RPC functionality to prevent potential security vulnerabilities'
        ],
        'disable_feeds'      => [
            'title' => 'Disable RSS Feeds',
            'description' => 'Disables all RSS/Atom feeds to reduce server load'
        ],
        'remove_rsd_wlw'     => [
            'title' => 'Remove RSD & WLW Links',
            'description' => 'Removes Really Simple Discovery and Windows Live Writer links from head'
        ],
        'remove_wp_version'  => [
            'title' => 'Remove WordPress Version',
            'description' => 'Hides WordPress version from meta tag for security reasons'
        ],
        'remove_shortlinks'  => [
            'title' => 'Remove Shortlinks',
            'description' => 'Removes shortlink meta tag from HTML head'
        ],
        'remove_rest_links'  => [
            'title' => 'Remove REST API Links from <head>',
            'description' => 'Removes REST API discovery links from HTML head'
        ],
    ];

    $options = get_option('ocwp_options', []);

    // Form submission
    if (isset($_POST['ocwp_save'])) {
        check_admin_referer('ocwp_save_options');

        $new_options = [];
        foreach ($all_options as $key => $option) {
            $new_options[$key] = isset($_POST[$key]) ? 1 : 0;
        }
        update_option('ocwp_options', $new_options);
        $options = $new_options;

        echo '<div class="updated"><p>Settings saved.</p></div>';
    }

    // Include the template
    include __DIR__ . '/settings-template.php';
}