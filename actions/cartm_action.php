<?php
require_once('../controllers/cartm_controller.php');
require_once('../models/shop_class.php');

//ADDING BRAND
// check if there's a POST variable with the name 'addProductButton'
if(isset($_GET['addtocart'])){
    
    // retrieve the name, description and quantity from the form submission
    $prod_id = $_GET['product_id'];
    $ip = Shop::getIpAddress();
    $qty = $_GET['qty'];
 
     
    // call the add_product_controller function: return true or false
    $result = add_carts($prod_id, $ip, $qty);
    
     

    if($result){
         header("Location: ../cart/cart.php");
    }
    else {
        header("Location:../view/index.php" );
    }
    
}
//DELETING Cart
if(isset($_GET['deleteID'])){

    $id = $_GET['deleteID'];
    $ip = Shop::getIpAddress();
    
       

    // call the function
    $result = remove_carts($id);
   
    if($result){
        header("Location: ../cart/cart.php");

    } 

    else echo "deletion failed";


}

//UPDATE Cart
if(isset($_GET['updateID'])){      

    $id = $_GET['updateID'];  
   
  
       
    $qty = $_GET['qty'];
   
    

    
    
        
    
    // call the function
    $result = update_cart_quantity($id, $qty);
   
    
    

    if($result)
        echo "update successful";
    
    else
        echo "update failed";


}
?>

