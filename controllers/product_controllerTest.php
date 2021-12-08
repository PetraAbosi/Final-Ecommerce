<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

 

// Include config file

 
include_once ('D:/Xampp/htdocs/Final-Ecommerce/controllers/product_controller.php'); 

// All ids passed  must be set in the prisonerController class respective methods

final class product_controllerTest extends TestCase{


    public function testselect_all_products_controller(): void{      

        $this->assertIsArray(

            select_all_products_controller()

        );

    }

    public function testadd_products_controller(): void{    
        $product_cat='Zara';
        $product_brand = 'Underwear';
        $product_title= 'banner';
        $product_price=1;
        $product_desc='Comfy undies';
        $product_image = '../images/bowls.jpg';

        $this->assertIsBool(

            add_products_controller($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image)
        );

    }

    
    public function testselect_one_products_controller(): void

    {    
        $id = 9;

        $this->assertIsArray(

            select_one_products_controller($id)

        );

    }



    public function testupdate_products_controller(): void

    {    
        $product_catID=1;
        $product_brandID=1;
        $product_title='Underwear';
        $product_price=1;
        $product_desc='Comfy undies';
        $fileName1='';
        $product_id=9;

        $this->assertIsBool(

            update_products_controller($product_catID,$product_brandID,$product_title,$product_price,$product_desc,$fileName1,$product_id)
            

        );

    }


 


 

}