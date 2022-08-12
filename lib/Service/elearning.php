<?php
    namespace animalsafe
    {
        class elearning extends animalsafeClient
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
                'object' => 'string',
                'limit' => 'int',

                'parent_id' => 'string',
                'parent_token' => 'string',
                
                'lien' => 'string',

                'ordre' => 'int',
                'duree' => 'int',
                
                'type' => 'string',
                'nom' => 'string',
                'sous-titre' => 'string',
                'introduction' => 'string',
                'contenu' => 'string',

                'newsletter' => 'int',

                'paiement-etat' => 'string',
                'paiement-stripe' => 'string',
                'paiement-facture' => 'string',

                'access' => 'string',
                'metadata' => 'string',
            ];
            static $options_Create = 
            [
                'object' => 'string',
                'nom' => 'string',
                'duree' => 'int',
                'parent_id' => 'string',
                'parent_token' => 'string',
                'nom_complet' => 'string',
                'nom_abrege' => 'string',
                'sous_titre' => 'string',
                'introduction' => 'string',
                'ordre' => 'int',
                'type' => 'string',
                'titre' => 'string',
                'contenu' => 'string',
                'username' => 'string',
                'password' => 'string',
                'prenom' => 'string',
                'nom' => 'string',
                'email' => 'string',
                'newsletter' => 'int',
                'adresse' => 'string',
                'code_postal' => 'string',
                'ville' => 'string',
                'naissance_date' => 'date',
                'naissance_ville' => 'string',
                'paiement_etat' => 'string',
                'paiement_stripe' => 'string',
                'paiement_facture' => 'string',
                'access' => 'string',
                'metadata' => 'json',
            ];
            static $options_Delete = 
            [
                'object' => 'string',
                'token' => 'string',
            ];
            static $options_Delete_alt = 
            [
                'id' => 'int',
            ];
            static $options_Retrieve = 
            [
                'object' => 'string',
                'token' => 'string',
            ];
            static $options_Retrieve_alt = 
            [
                'id' => 'int',
            ];
            static $options_Update = 
            [
                'object' => 'string',
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
                animalsafeData::$SERVICE_NAME = 'elearning';

                animalsafeData::$OPTIONS_ALL = $this::$options_All;
                animalsafeData::$OPTIONS_CREATE = $this::$options_Create;
                animalsafeData::$OPTIONS_DELETE = $this::$options_Delete;
                animalsafeData::$OPTIONS_RETRIEVE = $this::$options_Retrieve;
                animalsafeData::$OPTIONS_UPDATE = $this::$options_Update;

            }

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

            }

        }
    }
?>