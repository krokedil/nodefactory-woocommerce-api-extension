# nodefactory-woocommerce-api-extension
Extends WooCommerce API with various information used by NodeFactory’s integration products Sharespine and Plugboard.

To be able to send the *transaction number* from the payment service provider to Sharespine & Plugboard (in a view order API request - https://woothemes.github.io/woocommerce-rest-api-docs/#view-an-order), the transaction number needs to be stored in the order as a Post Meta field with the name *_transaction_id*. 

This can be accomplished by a payment module when the orderstatus of an order in WooCommerce is set to *Processing* (upon payment of the order): 

$order->payment_complete( $psp_transaction_number );

## Supported payment gateway extensions
The following payment gateways are supported and doesn't need any modification or updates.
- [WooCommerce Klarna Gateway] (https://www.woothemes.com/products/klarna/) (v2.0+)
- [WooCommerce DIBS Gateway] (https://www.woothemes.com/products/klarna/) (D2 platform)
- [WooCommerce DIBS Account] (https://krokedil.se/produkt/dibs-account/)
- [DIBS D2 MasterPass Gateway for WooCommerce] (https://krokedil.se/produkt/dibs-d2-masterpass/)