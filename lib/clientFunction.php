<?php
    namespace animalsafe
    {

    use animalsafe\animalsafeData;
    use clientError\ErrorArgument;

        class clientFunction
        {
            public static function getOptionsByService(string $operation_name = null)
            {
                $operation_name = strtoupper($operation_name);

                $static_data_key = 'OPTIONS_'.$operation_name;

                return animalsafeData::${$static_data_key};
            }
            public static function convertArrayToString(array $array_to_convert)
            {
                $string_converted = '';

                if(sizeof($array_to_convert)==1)
                {
                    $string_converted = $array_to_convert[0];
                }
                else
                {
                    $string_converted = implode(',',$array_to_convert);
                }

                return $string_converted;
            }
            public static function checkTypeInArray($key,$value,$type)
            {
                foreach($type as $type_key => $type_value)
                {
                    if($type_key == $key){

                        switch($type_value)
                        {
                            case 'int':
                                if(!is_int($value)){return false;}else{return true;};
                                break;
                            case 'date':
                                if(!strtotime($value)){return false;}else{return true;};
                                break;
                            case 'string':
                                if(!is_string($value)){return false;}else{return true;};
                                break;
                            case 'array':
                                if(!is_array($value)){return false;}else{return true;};
                                break;
                            case 'float':
                                if(!is_float($value)){return false;}else{return true;};
                                break;
                            default:

                                break;
                        }
                    };
                }
            }
        }
    }
?>