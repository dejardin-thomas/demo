<?php

require __DIR__.'/../vendor/autoload.php';

/* Initialiser le ServiceContainer */
$serviceManager = new Core\ServiceManager();

/* Ajouter le service de Log */
$serviceManager->addService('log', Core\Log::getInstance());
