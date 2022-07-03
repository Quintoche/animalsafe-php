<?php
    namespace animalsafe
    {
        class animalsafeData
        {

            static $SERVICE_NAME = '';
            static $OPERATION_NAME = '';
            static $URL_NAME = '';
            
            static $API_URL = '';
            
            static $OPTIONS_ALL = [];
            static $OPTIONS_CREATE = [];
            static $OPTIONS_DELETE = [];
            static $OPTIONS_RETRIEVE = [];
            static $OPTIONS_UPDATE = [];
            static $OPTIONS_CREATE_ALT = [];
            static $OPTIONS_DELETE_ALT = [];
            static $OPTIONS_RETRIEVE_ALT = [];
            static $OPTIONS_UPDATE_ALT = [];




            static $CURL_HEADER_ACCEPT = 'Accept: application/json';
            static $CURL_HEADER_BEARER = 'Authorization: Bearer ';

            static $CURL_DATA_ARRAY = array();
            static $CURL_DATA_JSON = '';
        }
    }
?>