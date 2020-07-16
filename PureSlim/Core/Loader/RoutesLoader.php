<?php


namespace PureSlim\Core\Loader;

use Slim\App;

class RoutesLoader
{
    /**
     *
     */
    const PATH_ROUTES = __DIR__ . "/../../src/"; //AccountsModule/UI/Routes/routes.php

    /**
     * @param App $app
     */
    public function getRoutes(App $app)
    {
        $app->group('/slim/api', function (App $app) {
            foreach (scandir(self::PATH_ROUTES) as $module) {
                $module = self::PATH_ROUTES . $module . "/UI/Routes/routes.php";
                if (file_exists($module)) {
                    require_once $module;
                }
            }
        });
    }
}