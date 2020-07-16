<?php

use Slim\App;
use PureSlim\src\AccountsModule\UI\Controllers\AccountsController;

$app->group('/slim/api', function (App $app) {
    $app->get('/test', AccountsController::class . ':test');
});

