<?php

namespace Core;

class ServiceManager {

    private $services = array();

    public function __construct() {
        ;
    }
    
    /**
     * Retourner le service
     * @param String $name
     * @return Object
     * @throws Exception
     */
    public function getService($name){
        if(!isset($this->services[$name])){
            throw new Exception('Impossible de trouver le service'.$name);
        }
        return $this->services[$name];
    }
    
    /**
     * Ajouter un service
     * @param String $name
     * @param String $class
     * @return \Core\ServiceManager
     */
    public function addService($name , $class){
        $this->services[$name] = $class;
        return $this;
    }
    
    /**
     * Supprimer un service
     * @param String $name
     * @return \Core\ServiceManager
     */
    public function removeService($name){
        if(isset($this->services[$name])){
            unset($this->services[$name]);
        }
        return $this;
    }

}




