<?php
require('../models/shop_class.php');

// add to cart
function add_carts($prod_id, $ip, $qty){
  
	$ip = Cart::getIpAddress();
        
    $cart_instance = new Cart();
    
    //check for duplicates
    $check = validate_cart($ip, $prod_id);
    
    if(count($check) > 0){
        echo '<script>alert("Item already in cart. Consider increasing the quantity in cart");
                    window.location ="../cart/cart.php";
                  </script>';
      
        
    } 
    else{ 
            $add = $cart_instance->add_carts($prod_id, $ip, $qty);
            
        if($add){
            header("Location: ../cart/cart.php");

        } 
        else{
            print("Failed");
        }

    }

}