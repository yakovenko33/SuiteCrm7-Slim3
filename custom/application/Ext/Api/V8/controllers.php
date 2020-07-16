<?php

use \Slim\Container;
use CustomerSlim\UI\Controllers\TestController;

return [TestController::class => function(Container $container) {
    return new TestController();
}];