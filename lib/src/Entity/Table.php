<?php

namespace Entity;

use ClassInterface\ProductInterface;

Class Table implements ProductInterface {

    private $id = NULL;
    private $name = NULL;
    private $price = NULL;


    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    /**
     * 
     * @param type $id
     * @return \Entity\Table
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @param type $name
     * @return \Entity\Table
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * 
     * @param type $price
     * @return \Entity\Table
     */
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }


}
