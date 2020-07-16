<?php


namespace PureSlim\Core\Loader;


use Slim\App;

abstract class AbstractProvider
{
    /**
     *
     */
    const PATH_ROUTES = __DIR__ . "/../../src/";

    /**
     * @param App $app
     */
    public function initProvider(App $app)
    {
        $this->includeRoutes($app);
    }

    /**
     * @param App $app
     */
    private function includeRoutes(App $app)
    {
        $moduleRoutes = self::PATH_ROUTES . $this->getRoutes();
        if (file_exists($moduleRoutes)) {
            require_once $moduleRoutes;
        }
    }

    /**
     * @return string
     */
    abstract protected function getRoutes();
}