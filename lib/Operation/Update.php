<?php
    namespace animalsafe\Operation
    {

    use animalsafe\animalsafeClient;
    use animalsafe\animalsafeData;
    use animalsafe\animalsafeHeader;
    use animalsafe\clientFunction;

        trait Update
        {
            public function update($id,$opts)
            {
                animalsafeData::$OPERATION_NAME = 'update';

                animalsafeData::$CURL_DATA_ARRAY = $opts;

                animalsafeData::$CURL_DATA_ARRAY['token'] = $id[0];
                
                animalsafeData::$URL_NAME = animalsafeClient::API_URL;

                $return = new animalsafeHeader();
                return json_decode($return::$CURL_RESULT,true);
            }
        }
    }
?>