    public function load($service,$param = null) {
        /* Tester si le service existe */
        if (!isset($this->services[$service])) {
            throw new Exception('Impossible de trouver le service');
        }
        
        /* Initialiser le service */
        $class = new ReflectionClass($this->services[$service]);
        if($class->isInstantiable()){
            
        }else if($class->hasMethod('getInstance')){
            $instance = $class->getInstance();
        }else{
            throw new Exception('Impossible d\'instancier le service '.$service);
        }
        
        return $instance;
    }