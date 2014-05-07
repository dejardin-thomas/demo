<?php

namespace Entity;

use ClassInterface\ProductInterface;

class Basket {

    private $products = array();
    private $qty = array();

    public function __construct() {
    }
    
    /**
     * 
     * @return array
     */
    public function getBasket(){
        return $this->products;
    }
    
    public function getQty(){
        return $this->qty;
    }

    /**
     * 
     * @return Basket
     */
    public function saveBasket() {
        $_SESSION['basket'] = serialize($this);
        return $this;
    }

    /**
     * 
     * @return Basket
     */
    public function removeBasket() {
        $this->products = NULL;
        $this->qty = NULL;
        $this->saveBasket();
        return $this;
    }

    /**
     * 
     * @param ProductInterface $product
     * @return \Entity\Basket
     */
    public function addProduct(ProductInterface $product) {
        
        if(isset($this->products[$product->getId()])){
            $this->increaseProduct($product);
        }else{
            $this->products[$product->getId()] = $product;
            $this->qty[$product->getId()] = 1;
        }
        
        $this->saveBasket();
        return $this;
    }

    /**
     * 
     * @param ProductInterface $product
     * @return Basket
     */
    public function increaseProduct(ProductInterface $product) {
        if (isset($this->qty[$product->getId()])) {
            $this->qty[$product->getId()]++;
        }
        $this->saveBasket();
        return $this;
    }

    /**
     * 
     * @param ProductInterface $product
     * @return Basket
     */
    public function decreaseProduct(ProductInterface $product) {
        if (isset($this->qty[$product->getId()])) {
            $this->qty[$product->getId()]--;
            if ($this->qty[$product->getId()] < 1) {
                $this->removeProduct($product);
            }
        }
        $this->saveBasket();
        return $this;
    }

    /**
     * 
     * @param ProductInterface $product
     * @return Basket
     */
    public function removeProduct(ProductInterface $product) {
        if (isset($this->products[$product->getId()])) {
            unset($this->products[$product->getId()]);
            unset($this->qty[$product->getId()]);
        }
        $this->saveBasket();
        return $this;
    }

}
