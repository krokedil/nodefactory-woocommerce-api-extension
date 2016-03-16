<?php
/*
Plugin Name: NodeFactory WooCommerce API Extension
Plugin URI: http://nodefactory.com
Description: Extends WooCommerce API with various information used by NodeFactory’s integration products Sharespine and Plugboard.
Version: 1.0
Author: Krokedil
Author URI: http://krokedil.com
License: GPL2+
Contributors: krokedil, niklashogefjord
*/

class NodeFactory_Woocommerce_Api_Extension {
	public function __construct() {
		add_filter( 'woocommerce_api_order_response', array( $this, 'woocommerce_api_order_response' ), 10, 4 );
	}
	
	public function woocommerce_api_order_response( $order_data, $order, $fields, $server )  {
        
		$order_data['payment_details']['transaction_id'] = get_post_meta( $order_data['id'], '_transaction_id', true );
        
		return $order_data;
	}
}
$nodefactory_woocommerce_api_extension = new NodeFactory_Woocommerce_Api_Extension();