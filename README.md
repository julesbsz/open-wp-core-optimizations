# WP Core Optimizations

**Contributors:** Jules Bousrez
**Tags:** performance, disable features, optimization, wp-core  
**Requires at least:** 5.5  
**Stable tag:** 1.0

A lightweight plugin to disable unnecessary WordPress core features for better performance and security.

---

## Description

This plugin allows you to selectively disable various built-in WordPress features that are often not needed and can affect performance or security. It includes an admin page under **Tools > Optimizations**, where you can toggle each feature on or off.

---

## Features

-   Disable Emoji support
-   Disable oEmbed functionality
-   Disable REST API
-   Disable XML-RPC
-   Disable RSS and Atom feeds
-   Remove RSD and WLW manifest links
-   Remove WordPress version meta tag
-   Remove shortlink from `<head>`
-   Remove REST API links from `<head>`

All options are configurable from the admin panel. No coding required.

---

## Installation

1. Download and unzip the plugin.
2. Upload the folder to `/wp-content/plugins/wp-core-optimizations/`.
3. Activate the plugin via the **Plugins** menu in WordPress.
4. Go to **Tools > Optimizations** to configure the settings.

---

## Frequently Asked Questions

### Will this plugin break anything?

If you use features like REST API, RSS feeds, or oEmbeds in your theme or plugins, disabling them could break related functionality. Make sure you only disable what you don't use.

---

## Screenshots

1. Admin settings page with toggles for each optimization.

---

## Changelog

### 1.0

-   Initial release with admin interface and feature toggles.

---

## Upgrade Notice

### 1.0

First version. Toggle features safely from the admin area.
