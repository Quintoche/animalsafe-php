<?php

// Client
require __DIR__ . '/lib/client.php';
require __DIR__ . '/lib/clientError.php';
require __DIR__ . '/lib/clientHeader.php';
require __DIR__ . '/lib/clientService.php';
require __DIR__ . '/lib/clientData.php';
require __DIR__ . '/lib/clientFunction.php';

// Exceptions
require __DIR__ . '/lib/Exception/Key.php';
require __DIR__ . '/lib/Exception/Argument.php';

// Operations
require __DIR__ . '/lib/Operation/All.php';
require __DIR__ . '/lib/Operation/Create.php';
require __DIR__ . '/lib/Operation/Delete.php';
require __DIR__ . '/lib/Operation/Update.php';
require __DIR__ . '/lib/Operation/Retrieve.php';
require __DIR__ . '/lib/Operation/File.php';
require __DIR__ . '/lib/Operation/Export.php';

// Services
require __DIR__ . '/lib/Service/stagiaire.php';
require __DIR__ . '/lib/Service/formation.php';
require __DIR__ . '/lib/Service/elearning.php';

?>