<?php
    namespace clientError
    {

    use Exception;

        class clientError extends Exception
        {
            protected static function CreateException(string $_err_mesg = null, int $_err_code = null)
            {
                return new Exception($_err_mesg, $_err_code);
            }
        }
    }
?>