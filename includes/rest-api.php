<?php
// Disable REST API access
if (!empty($options['disable_rest_api'])) {
    add_filter('rest_enabled', '__return_false');
    add_filter('rest_jsonp_enabled', '__return_false');
}