<?php
    namespace animalsafe 
    {

    use animalsafe\animalsafeClient;
    use animalsafe\animalsafeData;
    use clientError\ErrorNoInformation;

        class animalsafeHeader
        {
            protected static $CURL;
            protected static $HEADER;

            public static $CURL_RESULT = '';

            public function __construct()
            {
                animalsafeData::$API_URL = animalsafeData::$URL_NAME.animalsafeData::$SERVICE_NAME.'/'.animalsafeData::$OPERATION_NAME;

                animalsafeData::$CURL_HEADER_BEARER .= animalsafeClient::$API_KEY;
                
                
                $this->curlSetHeaders();
                $this->curlSetOptions();
                
                return $this->curlExecute();
            }

            private function curlSetOptions()
            {
                try {
                    animalsafeData::$CURL_DATA_JSON = json_encode(animalsafeData::$CURL_DATA_ARRAY);
                } 
                catch (\Exception $e) 
                {
                    throw ErrorNoInformation::SendMessage($e->getMessage());
                }
                curl_setopt(self::$CURL, CURLOPT_POSTFIELDS, animalsafeData::$CURL_DATA_JSON);

            }
            private function curlSetHeaders()
            {   
                self::$CURL = curl_init();

                self::$HEADER = array(
                    animalsafeData::$CURL_HEADER_ACCEPT,
                    animalsafeData::$CURL_HEADER_BEARER,
                );
                
                curl_setopt(self::$CURL, CURLOPT_URL, animalsafeData::$API_URL);
                curl_setopt(self::$CURL, CURLOPT_RETURNTRANSFER, true);
                curl_setopt(self::$CURL, CURLOPT_POST, true);
                curl_setopt(self::$CURL, CURLOPT_FOLLOWLOCATION, false);
                //for debug only!
                curl_setopt(self::$CURL, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt(self::$CURL, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt(self::$CURL, CURLOPT_HTTPHEADER, self::$HEADER);
            }
            private function curlCheckSSL()
            {

            }
            private function curlCheckURL()
            {

            }
            private function curlCheckParameters()
            {
                
            }
            private function curlCheckAuth()
            {
                
            }
            private function curlExecute()
            {
                self::$CURL_RESULT = curl_exec(self::$CURL);
                

                $result = json_decode(json_encode(self::$CURL_RESULT),true);
                return $result;
                curl_close(self::$CURL);
            }
        }
    }
?>