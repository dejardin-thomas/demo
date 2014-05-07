<?php

namespace Validator;

class Phone{
    
    public function isPhoneNumber($phone){
        
        if(!preg_match('/^([0-9\s-.])+$/', $phone)){
            return false;
        }
        
        return true;
    }
        
}
