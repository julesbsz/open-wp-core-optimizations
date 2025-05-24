<?php
// Disable XML-RPC functionality
if (!empty($options['disable_xmlrpc'])) {
    add_filter('xmlrpc_enabled', '__return_false');
}