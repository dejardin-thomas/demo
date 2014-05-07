<?php

namespace Entity;

use Exception;
use Validator\Phone;

class User {

    private $_name = NULL;
    private $_password = NULL;
    private $_phone = NULL;
    private $_address = NULL;

    /**
     * 
     * @param type $name
     * @return \User
     * @throws Exception
     */
    public function setName($name) {
        if (!preg_match("/^[a-zA-Z\s-]+$/", $name)) {
            throw new Exception('Le name ne peut avoir que des lettres ou des -');
        }
        $this->_name = $name;
        return $this;
    }

    public function getName() {
        return $this->_name;
    }

    /**
     * 
     * @param string $password
     * @return \User
     * @throws Exception
     */
    public function setPassword($password) {
        if (strlen($password) < 6) {
            throw new Exception('Le password doit contenir minimum 6 caracéres');
        }

        $this->_password = $password;
        return $this;
    }

    public function getPassword() {
        return $this->_password;
    }

    /**
     * 
     * @param type $phone
     * @return \User
     * @throws Exception
     */
    public function setPhone($phone) {
        if (!Phone::isPhoneNumber($phone)) {
            throw new Exception('Le phone est incorrect');
        }

        $this->_phone = $phone;
        return $this;
    }

    public function getPhone() {
        return $this->_phone;
    }
    
    /**
     * 
     * @param Address $address
     * @return User
     */
    public function setAddress(Address $address){
        $this->_address = $address;
        return $this;
    }
    
    /**
     * 
     * @return Address
     */
    public function getAddress(){
        return $this->_address;
    }

}
