<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

 

// Include config file

 
include_once ('D:/Xampp/htdocs/Final-Ecommerce/controllers/delete_controller.php'); 

// All ids passed  must be set in the prisonerController class respective methods

final class delete_controllerTest extends TestCase{




    public function testdelete_products_controller(): void

    {    
        $id = 20;

        $this->assertIsBool(

            delete_products_controller($id)

        );

    }


    public function testdelete_brands_controller(): void

    {    
        $id = 20;

        $this->assertIsBool(

            delete_brands_controller($id)

        );

    }

    public function testdelete_categories_controller(): void

    {    
        $id = 20;

        $this->assertIsBool(

            delete_categories_controller($id)

        );

    }

   
  


 


 

}