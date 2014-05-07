<?php

use Entity\Address;
use Entity\User;

class UserTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Tester si le nom a été modfifié
     */
    function testSetNameTrue(){
        $user = new User;
        $user->setName('thomas');
        $this->assertEquals($user->getName(), 'thomas');
    }
    
    /**
     * Tester si le nom a généré une exception
     * @expectedException Exception
     */
    function testSetNameHasException(){
        $user = new User;
        $user->setName('thomas84');
    }
    
    /**
     * 
     * @param type $password
     * @dataProvider providerPassword
     */
    public function testSetPassword($password){
        $user = new User;
        $user->setPassword($password);
        
        $this->assertEquals($password, $user->getPassword());
    }
    
    public function providerPassword(){
        return array(
            array('test84'),
            array('lePassword'),
            array('MonMegaPASSWORD'),
        );
    }
    
    /**
     * 
     * @expectedException Exception
     * @dataProvider providerPasswordException
     */
    public function testSetPasswordHasException($password){
        $user = new User;
        $user->setPassword($password);
    }
    
    public function providerPasswordException(){
        return array(
            array('a'),
            array('aa'),
            array('aaa'),
            array('aaaa'),
            array('aaaaa'),
        );
    }
    
    /**
     * 
     * @dataProvider providerPhone
     */
    public function testSetPhone($phone){
        $user = new User;
        $user->setPhone($phone);
        
        $this->assertEquals($user->getPhone(),$phone);
    }
    
    
    public function providerPhone(){
        return array(
            array('06 00 00 00 00'),
            array('04-00-00-00-00-00'),
            array('054454545'),
            array('759812'),
            array('45412444'),
        );
    }
    
    /**
     * 
     * @expectedException Exception
     * @dataProvider providerPhoneException
     */
    public function testSetPhoneException($phone){
        $user = new User;
        $user->setPhone($phone);
        
        $this->assertEquals($user->getPhone(),$phone);
    }
    
    
    public function providerPhoneException(){
        return array(
            array('06000a0000'),
            array('04te000000'),
            array('0544m545'),
            array('coucou'),
            array('OPOPYPO'),
        );
    }
    
    public function testSetAddress(){
        $address = new Address;
        $user = new User;
        
        $address->setNumber('12')
                ->setAddress(' XXXXXXXXXXXXXXXX ')
                ->setCp('XXXXX')
                ->setCountry('FRANCE');
        
        $user->setAddress($address);
        
        $this->assertEquals($user->getAddress(), $address);
    }
    
    public function testSetAddressMock(){
        $user = new User;
        $address = $this->getMock('Entity\Address');
        $user->setAddress($address);
        
        $this->assertEquals($user->getAddress(), $address);
    }
        
}

