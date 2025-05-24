<?php
// Disable RSS/Atom feeds
if (!empty($options['disable_feeds'])) {
    function ocwp_disable_feeds_cb() {
        wp_die(__('No feed available. Please visit our homepage.'), 'Feeds Disabled', ['response' => 403]);
    }

    add_action('do_feed', 'ocwp_disable_feeds_cb', 1);
    add_action('do_feed_rdf', 'ocwp_disable_feeds_cb', 1);
    add_action('do_feed_rss', 'ocwp_disable_feeds_cb', 1);
    add_action('do_feed_rss2', 'ocwp_disable_feeds_cb', 1);
    add_action('do_feed_atom', 'ocwp_disable_feeds_cb', 1);
}