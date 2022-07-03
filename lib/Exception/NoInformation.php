<?php
    namespace clientError
    {
        class ErrorNoInformation extends clientError
        {
            public static function SendMessage($e)
            {
                return clientError::CreateException('An unknown error occured. Look at the message send by the API below : '.$e,40300);
            }
        }
    }
?>