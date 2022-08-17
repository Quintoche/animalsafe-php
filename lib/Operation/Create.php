<?php
    namespace animalsafe\Operation
    {

    use animalsafe\animalsafeClient;
    use animalsafe\animalsafeData;
    use animalsafe\animalsafeHeader;
    use animalsafe\clientFunction;
    use clientError\ErrorArgument;

        trait Create
        {
            /**
             * Retrieve all resources from a service. Optional parameters can be added.
             *
             * @param array|string $id `optional` the ID of the resource to retrieve
             * @param null|array|string|json $opts `optional`
             *
             * @throws \animalsafe\clientError\clientError if the request fails
             *
             * @return static
             */
            public function create($opts)
            {
                animalsafeData::$OPERATION_NAME = 'create';
                animalsafeData::$URL_NAME = animalsafeClient::API_URL;
                
                $this->CheckForArgument($opts);
                $this->CheckForType($opts);

                animalsafeData::$CURL_DATA_ARRAY = $opts;

                $return = new animalsafeHeader();
                
                return $return::$CURL_RESULT;
            }

            private function CheckForArgument($opts)
            {
                foreach ($opts as $key => $value) {

                    if(!array_key_exists($key, clientFunction::getOptionsByService(animalsafeData::$OPERATION_NAME)))
                    {
                        throw ErrorArgument::NotValidArgument($key,clientFunction::getOptionsByService(animalsafeData::$OPERATION_NAME));
                    }
                }
            }
            private function CheckForType($opts)
            {
                foreach ($opts as $key => $value) {

                    if(!clientFunction::checkTypeInArray($key,$value,clientFunction::getOptionsByService(animalsafeData::$OPERATION_NAME)))
                    {
                        throw ErrorArgument::NotCorrectType($value,clientFunction::getOptionsByService(animalsafeData::$OPERATION_NAME));
                    };
                }
            }
        }
    }
?>