<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{

    public function test_email(){

        $email = Validate::email('i@rimosoft.com');
        $this->assertTrue($email); 
        
        $email = Validate::email('i@@@rimosoft.com');
        $this->assertFalse($email); 
    }
    public function test_url(){

        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);
        
        $url = Validate::url('platzi.com');
        $this->assertFalse($url); 
    }
    public function test_password(){

        $pass = Validate::password('pedro.A12');
        $this->assertTrue($pass); 

        $pass = Validate::password('Jo.ge');
        $this->assertFalse($pass);

    }



}