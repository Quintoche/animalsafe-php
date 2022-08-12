<?php
    namespace animalsafe\Operation
    {

    use animalsafe\animalsafeClient;
    use animalsafe\animalsafeData;
    use animalsafe\animalsafeHeader;
    use animalsafe\clientFunction;

        trait Retrieve
        {
             /**
             * Retrieve all resources from a service. Optional parameters can be added.
             *
             * @param array|string $id `optional` the ID of the resource to retrieve
             * @param null|array|string $opts `optional`
             *
             * @throws \animalsafe\clientError\clientError if the request fails
             *
             * @return static
             */
            public function retrieve($opts)
            {

                animalsafeData::$OPERATION_NAME = 'retrieve';

                animalsafeData::$URL_NAME = animalsafeClient::API_URL;

                animalsafeData::$CURL_DATA_ARRAY = $opts;

                $return = new animalsafeHeader();
                return json_decode($return::$CURL_RESULT,true);
            }
        }
    }
?>