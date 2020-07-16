<?php


namespace PureSlim\Core\Loader;


use Slim\App;

class ContainersLoader
{
    const PATH_ROUTES = __DIR__ . "/../../src/";

    /**
     * @param App $app
     * @return array
     */
    public function getContainers(App $app)
    {
        $container = $app->getContainer();
        foreach (scandir(self::PATH_ROUTES) as $module) {
            $module = self::PATH_ROUTES . $module . "/Infrastructure/Provider/Containers.php";
            if (file_exists($module)) {
                require_once $module;

                $container = array_merge($containers, (new Containers)->getContainers());
            }
        }

        return $containers;
    }
}