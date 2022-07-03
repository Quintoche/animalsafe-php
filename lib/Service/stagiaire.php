<?php
    namespace animalsafe
    {
        class stagiaire extends animalsafeClient
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

            public function __construct()
            {
                animalsafeData::$SERVICE_NAME = 'stagiaire';
            }

        }
    }
?>