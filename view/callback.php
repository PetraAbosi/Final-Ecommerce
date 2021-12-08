<?php
session_start();

require('../controllers/cart_controller.php');

$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
  die('No reference supplied');
}



curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);
// var_dump($tranx);
// exit;

if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

if('success' == $tranx->data->status){
  // transaction was successful...
  // please check other things like whether you already gave value for this ref
  // if the email matches the customer who owns the product etc
  // Give value
  
  $ip = Cart::getIpAddress();
  $currency = 'GHS';
  $payment_date = date('Y/m/d');
  $customer_email = $_SESSION['customer_email'];
  $customer_id = $_SESSION['customer_id'];
  $invoice_no = rand(1,100);
  $order_status = "Successful";
  $amount = total_Amount_in_Cart();
  $product_id = $_SESSION['product_id']; 
  $product_quantity= $_SESSION['qty'];




  //echo $ip; echo $currency; echo $payment_date; echo $customer_email; echo $customer_id; echo $invoice_no; echo $order_status; echo $amount; echo $product_id; echo  $qty;
 
  $recent_order =  recent_order();
  // var_dump($recent_order);
  // exit;

 
  $payment = add_payment_details_controller($amount, $customer_id, $recent_order, $currency, $payment_date);
  // var_dump($payment);
  // exit;


  $result = select_all_cart_controller($ip);
  // var_dump($result);
  // exit;
  
  foreach ($result as $row){

    $order= add_orders($customer_id, $invoice_no, $order_status);
    
  
  }

  foreach ($result as $row){

  $order_details = add_order_details_controller($recent_order, $product_id, $product_quantity);
  
  // var_dump($order_details);
  // exit;
  }
  

  foreach ($result as $row){

  $delete_details = remove_carts($row['p_id'],$ip);

  }

  header('Location: ../view/index.php');
  



  // insert payment
  // insert order
  // clear cart

  // redirect to index
 
}
?>
