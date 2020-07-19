<?php


namespace PureSlim\Core\Loader;


use Psr\Container\ContainerInterface;
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
        $this->getContainer($app->getContainer());
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

    private function includeContainer(App $app)
    {
        //getContainer();
    }

    /**
     * @return string
     */
    abstract protected function getRoutes();

    /**
     * @param ContainerInterface $container
     * @return mixed
     */
    abstract protected function getContainer(ContainerInterface $container);
}