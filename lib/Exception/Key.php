<?php
    namespace clientError
    {
        class ErrorKey extends clientError
        {
            public static function NoKeyProvided()
            {
                return clientError::CreateException('No Key provided. Please put a valid and a not deprecated key.',40100);
            }
            public static function BadKeyProvided()
            {
                return clientError::CreateException('Bad Key provided. Make sure you have provided a valid and a not deprecated key.',40101);
            }
        }
    }
?>