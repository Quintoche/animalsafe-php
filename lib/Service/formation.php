<?php
    namespace animalsafe
    {
        class formation extends animalsafeClient
        {

            // API
            use Operation\All;
            use Operation\Create;
            use Operation\Delete;
            use Operation\Retrieve;
            use Operation\Update;

            // Files
            use Operation\File;

            // Print
            use Operation\Export;

            static $options_All = 
            [
                'limit' => 'int',
            ];
            static $options_Create = 
            [
                'date' => 'date',
                'type' => 'int',
                'teacher' => 'int',
                'address' => 'string',
                'city' => 'string',
                'postal_code' => 'int',
                'region' => 'int',
                'seat' => 'int',
            ];
            static $options_Delete = 
            [
                'token' => 'string',
            ];
            static $options_Delete_alt = 
            [
                'id' => 'int',
            ];
            static $options_Retrieve = 
            [
                'token' => 'string',
            ];
            static $options_Retrieve_alt = 
            [
                'id' => 'int',
            ];
            static $options_Update = 
            [
                'token' => 'string',
                'data_to_update' => 'json',
            ];
            static $options_Update_alt = 
            [
                'id' => 'int',
                'data_to_update' => 'json',
            ];

            static $OPTIONS_test_create =
            [
               'date' => ['type'=>'date','default'=>'2022-01-01','canBeNull'=>false,],
               'type' => ['type'=>'int','default'=>'0','canBeNull'=>false,],
               'teacher' => ['type'=>'int','default'=>'0','canBeNull'=>false,],
               'address' => ['type'=>'string','default'=>null,'canBeNull'=>true,],
               'city' => ['type'=>'string','default'=>'n/a','canBeNull'=>false,],
               'postal_code' => ['type'=>'int','default'=>'00000','canBeNull'=>false,],
               'region' => ['type'=>'int','default'=>'0','canBeNull'=>false,],
               'seat' => ['type'=>'int','default'=>'15','canBeNull'=>false,],
            ];

            public function __construct()
            {
                animalsafeData::$SERVICE_NAME = 'formation';

                animalsafeData::$OPTIONS_ALL = $this::$options_All;
                animalsafeData::$OPTIONS_CREATE = $this::$options_Create;
                animalsafeData::$OPTIONS_DELETE = $this::$options_Delete;
                animalsafeData::$OPTIONS_RETRIEVE = $this::$options_Retrieve;
                animalsafeData::$OPTIONS_UPDATE = $this::$options_Update;

            }


        }
    }
?>