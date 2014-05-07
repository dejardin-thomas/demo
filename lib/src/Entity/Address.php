<?php

namespace Entity;

class Address {
    
    private $_number = NULL;
    private $_address = NULL;
    private $_city = NULL;
    private $_cp = NULL;
    private $_country = NULL;
    
    public function getIdUser(){
        return $this->_id_user;
    }
    
    public function getNumber() {
        return $this->_number;
    }

    public function getAddress() {
        return $this->_address;
    }
    
    public function getCity() {
        return $this->_city;
    }

    public function getCp() {
        return $this->_cp;
    }

    public function getCountry() {
        return $this->_country;
    }
    
    public function setNumber($_number) {
        $this->_number = $_number;
        return $this;
    }

    public function setAddress($_address) {
        $this->_address = $_address;
        return $this;
    }
    
    public function setCity($_city) {
        $this->_city = $_city;
        return $this;
    }

    public function setCp($_cp) {
        $this->_cp = $_cp;
        return $this;
    }

    public function setCountry($_country) {
        $this->_country = $_country;
        return $this;
    }


}

