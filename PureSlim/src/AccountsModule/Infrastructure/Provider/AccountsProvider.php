<?php


namespace PureSlim\src\AccountsModule\Infrastructure\Provider;


use PureSlim\Core\Loader\AbstractProvider;
use PureSlim\src\AccountsModule\Infrastructure\Repositories\AccountsRepository;
use PureSlim\src\AccountsModule\UI\Controllers\AccountsController;
use Slim\App;
//use Slim\Container;
use Psr\Container\ContainerInterface;
use PureSlim\src\AccountsModule\Application\Services\ExampleService;


class AccountsProvider extends AbstractProvider
{
    /**
     * @return string
     */
    protected function getRoutes()
    {
        return "/AccountsModule/UI/Routes/routes.php";
    }

    /**
     * @param ContainerInterface $container
     */
    protected function getContainer(ContainerInterface $container)
    {
        $container[AccountsController::class] = function($container) {
            return new AccountsController($container->get(ExampleService::class));
        };

        $container[ExampleService::class] = function($container) {
            return new ExampleService(new AccountsRepository());
        };
    }
}