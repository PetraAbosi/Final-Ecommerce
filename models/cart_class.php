<?php

require_once('../settings/dbconnection.php');

// inherit the methods from Connection
class Cart extends Dbconnection{
	
	function cart_items($ip){
		return $this->query("SELECT products.product_id, products.product_cat, products.product_brand, products.product_price, products.product_title, products.product_desc, products.product_image, products.product_keywords, cart.p_id, cart.ip_add, cart.qty FROM products JOIN cart ON products.product_id = cart.p_id AND cart.ip_add = '$ip'");
	}
	function payment_items($ip){
		return $this->query("SELECT orders.order_id, orders.customer_id, orders.invoice_no, orders.order_date, orders.order_status, payment.pay_id, payment.amt, payment.customer_id, payment.order_id, payment.currency, payment.payment_date FROM orders JOIN payment ON orders.order_id = payment.order_id AND orders.customer_id = payment.customer_id");
	}

	function order_items($ip){
		return $this->query("SELECT orders.order_id, orders.customer_id, orders.invoice_no, orders.order_date, orders.order_status, orders.order_id, orderdetails.order_id, orderdetails.product_id, orderdetails.qty FROM orders JOIN orderdetails ON = orders.order_id = orderdetails.order_id");
	}

	function cart_item_quantity($ip){
		return $this->query("SELECT * FROM cart WHERE ip_add='$ip'");
	}

	function cart_item_amount($ip){
		return $this->query("SELECT SUM(product_price * qty*1/100) AS amount FROM products JOIN cart ON products.product_id = cart.p_id AND cart.ip_add = '$ip'");
	}

	function validate_cart($ip, $prod_id){
		return $this->query("SELECT * FROM `cart` WHERE `ip_add`='$ip' AND `p_id`='$prod_id'");
	}

	function add_carts($prod_id, $ip, $qty){
		$sql = "insert into cart(`p_id`, `ip_add`,`qty`) values('$prod_id', '$ip', '$qty')";
		return $this->query($sql);
	
	}

	function remove_carts($prod_id, $ip){
		return $this->query("DELETE FROM cart WHERE ip_add='$ip' AND p_id='$prod_id'");
	}

	function select_one_cart($id){
		// return associative array or false
		return $this->query("select * from cart where p_id='$id'");
	}

	function update_cart_quantity($id, $qty, $ip){
		return $this->query("UPDATE cart SET qty='$qty' WHERE ip_add='$ip' AND p_id='$id'");
	}

	function add_orders($customer_id, $invoice_no, $order_status){
		return $this->query("INSERT INTO orders (`customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$customer_id', '$invoice_no',NOW(), '$order_status')");
	}

	public static function getIpAddress(){
		$ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : isset($_SERVER['REMOTE_ADDR']);
        return $ip;
    }

	function add_order_details($order_id, $product_id, $product_quantity){
		$sql = "INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$order_id','$product_id','$product_quantity')";
		// echo $sql;
		// exit;

		return $this->query($sql);
		// var_dump($this->query($sql));
		// exit;
	}

	function select_all_cart($ip){
		return $this->query("select * from cart inner join products on p_id =product_id where ip_add = '$ip' ");
	}

	function recent_order(){
		return $this->query("select MAX(order_id) as recent from orders");
	}

	function add_payment($amount, $customer_id, $recent_order, $currency, $payment_date){
		$sql = "INSERT INTO `payment`(`amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amount','$customer_id','$recent_order','$currency','$payment_date')";
		return $this->query($sql);
		// var_dump($this->query($sql));
		// exit;

	}

}
