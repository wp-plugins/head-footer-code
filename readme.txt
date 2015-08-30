=== Head & Footer Code ===
Contributors: urkekg
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8RDRQXPV6YB98
Tags: wp_head, wp_footer, head footer code, custom head script, custom footer script, google analytics, pixel tracking, tracking code, javascript, scripts, site verification, css
Requires at least: 3.9
Tested up to: 4.3
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easy add site-wide and/or article specific custom code to head and/or footer section (before the &lt;/body&gt;) by hooking to wp_head and wp_footer.

== Description ==

Let we say that you have been told to add some custom code (HTML, JavaScript or CSS style) to page's `<head>` (like site verification code, custom styles, webfont link, etc), or just before `</body>` (like pixel tracking, analytics code, heatmap code, etc), but you are not programmer. Then you can use Head &amp; Footer Code to do that.

Simply go to Tools &rarr; Head &amp; Footer Code in your website admin dashboard, and insert custom code to HEAD or FOOTER section (depending what you have to do).

If you have to insert some custom code specific for individual article (post, page, custom post type), then you can use Article specific metabox while you editing post/page/custom post type (check out [Screenshots](https://wordpress.org/plugins/head-footer-code/screenshots/)). There you can also set should that specific code be appended to site-wide code defined on **Tools** &rarr; **Head &amp; Footer Code**, or should be overwritten.

**Works or broken?**

Please, consider to vote for this plugin. When you vote for broken, be so kind and tell in the [Forum](https://wordpress.org/support/plugin/head-footer-code) what is broken. Maybe I might be able to fix it to make the plugin also work for you.

**I need your support**

It is very hard to continue development and support for this and my other free plugisn without contributions from users like you. If you enjoy using Head &amp; Footer Code and find it useful, please consider [making a donation](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8RDRQXPV6YB98). Your donation will help encourage and support the plugin's continued development and better user support.

**Features**

* Set site-wide custom content for head page section (before the `</head>`)
* Set site-wide custom content for footer page section (before the `</body>`)
* Set article specific custom code for head page section (before the `</head>`)
* Set article specific custom content for footer page section (before the `</body>`)
* Choose priority of printed custom code to head/footer sections (lower number mean far from `</head>` and `</body>`, higher number means closer to `</head>` and `</body>`)
* Choose which post types will have enabled article specific head/footer fields
* Choose should article specific head/footer code be appended to site-wide code, or will replace site-wide code
* Site-wide section located under **Tools** > **Head & Footer Code**
* If you have enabled WP_DEBUG constant in `wp-config.php`, you'll see site-wide and article specific entries in page source code wrapped to commens.

== Installation ==

Installation of this plugin is fairly easy as any other WordPress plugin.

**Standard procedure**

1. Go to **Plugins** &rarr; **Add New**.
1. Search for **head footer code**.
1. Enter to **Search Plugin** field `had footer code` and press Enter key.
1. Locate plugin **Head &amp; Footer Code** and click **Install Now** button.
1. After successfully installed plugin click link **Activate Plugin**.
1. Visit the **Tools** &rarr; **Head &amp; Footer Code**.
1. Add the desired code to proper section.

**FTP procedure**

1. Unpack `head-footer-code.zip`
1. Upload the whole directory and everything underneath to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Visit the **Tools** &rarr; **Head &amp; Footer Code** (**Settings** link).
1. Add the desired code to proper section.

== Frequently Asked Questions ==

= Why another one custom code plugin? =

Because all other similar plugins could not satisfy my requirements. In general, they have too much features or lack some features I need.

== Screenshots ==

1. Head &amp; Footer Code box in Plugin search results
2. Site-wide settings page
3. Article specific metabox
4. Example of custom code inserted to HEAD section (site-wide with appended article specific)
5. Example of custom code inserted to FOOTER section (site-wide with appended article specific)

== Upgrade Notice ==

= 1.0.0 =
Initial release of new plugin developed by Aleksandar Urosevic.

== Changelog ==

= 1.0.1 =
* Fix: PHP Notice Trying to get property of non-object
* Optimize: Remove `attachment` post type from available to select as no reason to have custom head/footer code on attachments
* Optimize: Settings code cleanup

= 1.0.0 =
* Initial release.