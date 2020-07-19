<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\App;
use PureSlim\Core\Loader\ApplicationLocator;

$config = ['settings' => [
    'addContentLengthHeader' => false,
]];


$app = new App($config);
$services = new ApplicationLocator($app);

$services->registerProviders();
$app->run();
