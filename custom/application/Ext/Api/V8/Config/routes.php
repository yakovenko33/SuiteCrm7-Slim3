<?php

use CustomerSlim\UI\Controllers\TestController;

$app->get('/hello', function() {
    return 'Hello World!';
});

$app->get('/test', TestController::class . ":test");