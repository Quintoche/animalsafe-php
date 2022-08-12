<?php
    namespace animalsafe 
    {

    use clientError\ErrorKey;

        /**
         * Client used to send requests to Stripe's API.
         *
         * @property \animalsafe\Service\formation $formation
         * @property \animalsafe\Service\stagiaire $stagiaire
         */ 
        class animalsafeClient
        {

            const API_URL = 'https://api.animal-safe.fr/';
            const FILE_URL = 'http://file.animal-safe.fr/';
            const PRINT_URL = 'http://print.animal-safe.fr/';

            public static $API_KEY = '';

            protected $error;

            public function __construct(string $_api_key = null)
            {
                if($_api_key == null)
                {
                    throw ErrorKey::NoKeyProvided();
                }
                else
                {
                    $this::$API_KEY = $_api_key;
                }
            }
            private $coreServiceFactory;

            public function __get($name)
            {
                if (null === $this->coreServiceFactory) {
                    $this->coreServiceFactory = new \animalsafe\Service\clientService($this);
                }
        
                return $this->coreServiceFactory->__get($name);
            }
        }
    }
?>