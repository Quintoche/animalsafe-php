<?php
 namespace animalsafe\Service
 {
     class clientService
     {
         private $services = [];
         private $client;

         private static $map =
         [
             'stagiaire' => \animalsafe\stagiaire::class,
             'formation' => \animalsafe\formation::class,
             'elearning' => \animalsafe\elearning::class,
         ];

         protected function getServiceClass($name)
         {
             return \array_key_exists($name, self::$map) ? self::$map[$name] : null;
         }

         /**
          * @param string $name
          *
          * @return null|AbstractService|AbstractServiceFactory
          */
         public function __get($name)
         {
             $serviceClass = $this->getServiceClass($name);
             if (null !== $serviceClass) {
                 if (!\array_key_exists($name, $this->services)) {

                    
                     $this->services[$name] = new $serviceClass($this->client);
                 }

                 return $this->services[$name];
             }

             \trigger_error('Undefined property: ' . static::class . '::$' . $name);

             return null;
         }

     }
 }
?>