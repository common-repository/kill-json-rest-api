=== Kill JSON REST API ===
Contributors: arminmeth
Tags: json, rest, api, rest api, json api, disable, kill, remove, links, head, tags
Requires at least: 4.7
Tested up to: 4.7
Stable tag: 1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Completely disables JSON REST API for both registered and anonymous users in WordPress 4.7.* and removes API links and tags.

== Description ==

While WordPress is slowly but surely becoming a complete application framework and JSON REST API is huge step in this direction, there is a large number of WordPress users that do not need advanced features like those offered by WordPress JSON REST API. This plugin helps them to turn those advanced features off and not worry about it.

While other similar plugins disable JSON REST API functionality only for anonymous users, Kill JSON REST API completely disables the framework for all users and removes links and tags from head element.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Test it - go to your-url.com/wp-json and you should see the following message: {"code":"disabled","message":"JSON REST API is disabled.","data":null}

== Changelog ==

= 1.1 =
*Release Date - 15th February, 2017*

* Added functionality to remove API links and tags from head

= 1.0 =
*Release Date - 14th February, 2017*

* Initial release