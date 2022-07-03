<?php
    namespace clientError
    {
        class ErrorArgument extends clientError
        {
            public static function TooFewArgument()
            {
                return clientError::CreateException('No Key provided. Please put a valid and a not deprecated key.',40200);
            }
            public static function NoArgumentProvided()
            {
                return clientError::CreateException('Bad Key provided. Make sure you have provided a valid and a not deprecated key.',40201);
            }
            public static function NotValidArgument(string $e,array $a)
            {
                return clientError::CreateException($e.' is not a valid argument. Please make sure you have follow the list below : '.implode(', ',array_keys($a)),40202);
            }
            public static function NotCorrectType(string $e,array $a)
            {
                return clientError::CreateException($e.' is not a valid type. Please make sure you have follow the list below : '.implode(', ',array_keys($a)),40202);
            }
        }
    }
?>