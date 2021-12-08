<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

 

// Include config file

 
include ('D:/Xampp/htdocs/Final-Ecommerce/controllers/cart_controller.php'); 

// All ids passed  must be set in the prisonerController class respective methods

final class cart_controllerTest extends TestCase{


    public function testselect_all_cart_controller(): void{ 
        $ip=1;     

        $this->assertIsArray(

            select_all_cart_controller($ip)

        );

    }

    public function testadd_orders(): void{    
        $customer_id=1;
        $invoice_no= 88;
        $order_status='Successful';
      

        $this->assertNull(

            add_orders($customer_id, $invoice_no, $order_status)

        );

    }

    public function testadd_order_details_controller(): void{    
        $order_id=1;
        $product_id=70;
        $qty=2;
      

        $this->assertIsBool(

            add_order_details_controller($order_id, $product_id, $qty)

        );

    }

    public function testadd_payment_details_controller(): void{    
        $amt= 1;
        $c_id=1;
        $order_id=88;
        $currency='GHS';
        $payment_date='12/6/2021';
      

        $this->assertIsBool(

            add_payment_details_controller($amt, $c_id, $order_id, $currency, $payment_date)

        );

    }

    public function testadd_carts(): void{    
        $prod_id=69;
        $ip=1;
        $qty=2;
      

        $this->assertNull(

            add_carts($prod_id, $ip, $qty)

        );

    }

    
    public function testselect_one_cart(): void

    {    
        $id = 1;

        $this->assertIsArray(

            select_one_cart($id)

        );

    }


    public function testremove_carts(): void

    {    
        $prod_id = 1;

        $this->assertNull(

            remove_carts($prod_id)

        );

    }

    public function testupdate_cart_quantity(): void

    {    
     
        $id=20;
        $qty=2;
    

        $this->assertIsBool(

            update_cart_quantity($id, $qty)
            

        );

    }

 

}