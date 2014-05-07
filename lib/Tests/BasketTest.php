<?php

use Entity\Basket;

class BasketTest extends PHPUnit_Framework_TestCase {

    private $basket = NULL;
    


    /**
     * 
     * @dataProvider providerProduct
     */
    function testAddProduct($product, $id ,$name , $price) {
        $this->basket = new Basket();

        
        $product->setId($id);
        $product->setName($name);
        $product->setPrice($price);
        
        $this->basket->addProduct($product);

        $products = $this->basket->getBasket();
        $this->assertEquals($products[$product->getId()], $product);
    }
    
    public static function providerProduct(){
        return array(
            array( new Entity\Table() , '1' , 'table 1', 20.99 ),
            array( new Entity\Table() , '2' , 'table 2', 10.99 ),
            array( new Entity\Chair() , '1' , 'chaise 1', 2.99 ),
            array( new Entity\Chair() , '2' , 'chaise 1', 4.99 ),
        );
    }

}
