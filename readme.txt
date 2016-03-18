=== NodeFactory WooCommerce API Extension ===
Contributors: krokedil, niklashogefjord
Tags: WooCommerce, API, NodeFactory, Krokedil, transaction, payment
Requires at least: 4.2
Tested up to: 4.4.2
Stable tag: 1.0
License: GPL2+
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Extends WooCommerce API with various information used by NodeFactory’s integration products Sharespine and Plugboard.

== Description ==

Includes payment gateway transaction number (stored as _transaction_id in an order) in the WooCommerce API view order endpoint.

== Installation ==

1. Upload `nodefactory-woocommerce-api-extension` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. That's it

== Frequently Asked Questions ==
**Does this plugin automatically add the PSP's transaction number to the WooCommerce API view order endpoint?**
To be able to send the *transaction number* from the payment service provider to [Sharespine] (https://www.sharespine.com/) & [Plugboard] (http://plugboard.io/) (in a view order API request - https://woothemes.github.io/woocommerce-rest-api-docs/#view-an-order), the transaction number needs to be stored in the order as a Post Meta field with the name *_transaction_id*. 

This can be accomplished by a payment module when the order status of an order in WooCommerce is set to *Processing* (upon payment of the order) like this: 

```$order->payment_complete( $psp_transaction_number );```

**Are there any payment gateways that support this already?**
The following payment gateways are supported and doesn't need any modification or updates.
- [WooCommerce Klarna Gateway] (https://www.woothemes.com/products/klarna/) (v2.0+)
- [WooCommerce DIBS Gateway] (https://www.woothemes.com/products/klarna/) (D2 platform)
- [WooCommerce DIBS Account] (https://krokedil.se/produkt/dibs-account/)
- [DIBS D2 MasterPass Gateway for WooCommerce] (https://krokedil.se/produkt/dibs-d2-masterpass/)

== Changelog ==

= 1.0 =
* Initial release