<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

 

// Include config file

 
include_once ('D:/Xampp/htdocs/Final-Ecommerce/controllers/customer_controller.php'); 

// All ids passed  must be set in the prisonerController class respective methods

final class customer_controllerTest extends TestCase{


    public function testselectAllCustomerController(): void{      

        $this->assertIsBool(

            selectAllCustomerController()

        );

    }

    public function testaddCustomerController(): void{    
        $name= 'Timothy Agyei';
        $email='t.m@gmail.com';
        $password='123456789';
        $country= 'Ghana';
        $city='Accra';
        $contact='05432678';

        $this->assertIsBool(

            addCustomerController($name, $email, $password, $country, $city, $contact)

        );

    }

    
    public function testselectOneCustomer(): void

    {    
        $email = "e.v@gmail.com";

        $this->assertIsArray(

            selectOneCustomerController($email)

        );

    }


    public function testdeleteCustomer(): void

    {    
        $id = 1;

        $this->assertIsBool(

            deleteCustomerController($id)

        );

    }

    public function testeditCustomerController(): void

    {    
        $name= 'Nii Agyei';
        $email='t.m@gmail.com';
        $password='123456789';
        $country= 'Ghana';
        $city='Tema';
        $contact='05432678';
        $image= NULL;
        $userRole= 0;
        $id=20;

        $this->assertIsBool(

            editCustomerController($name, $email, $password, $country, $city, $contact, $image, $userRole, $id)
            

        );

    }


 


 

}