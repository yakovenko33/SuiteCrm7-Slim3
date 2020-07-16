<?php


namespace PureSlim\src\AccountsModule\Infrastructure\Provider;


use PureSlim\Core\Loader\AbstractProvider;
use Slim\App;

class AccountsProvider extends AbstractProvider
{
    /**
     * @return string
     */
    protected function getRoutes()
    {
        return "/AccountsModule/UI/Routes/routes.php";
    }
}