<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

 

// Include config file

 
include_once ('D:/Xampp/htdocs/Final-Ecommerce/controllers/search_controller.php'); 

// All ids passed  must be set in the prisonerController class respective methods

final class search_controllerTest extends TestCase{

    
    public function testsearchProduct(): void

    {    
        $product_title = "Brassier";

        $this->assertIsArray(

            searchProduct($product_title)

        );

    }


    

 


 

}