<?php
/* php vendor/phpunit/phpunit/phpunit -c app */

class ClassTest extends \PHPUnit_Framework_TestCase {
    
    function testTrueIsTrue(){
        $this->assertTrue(true);
    }
    function testFaseIsFalse(){
        $this->assertFalse(false);
    }
    
}

