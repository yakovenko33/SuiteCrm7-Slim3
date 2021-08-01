<?php


namespace PureSlim\src\AccountsModule\Application\ExampleLogic\Services;


use Psr\Container\ContainerInterface;
use PureSlim\src\AccountsModule\Infrastructure\Interfaces\AccountsRepositoryInterface;
use PureSlim\src\Common\CommandBus\CommandQueryInterface;

class ExampleService
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var AccountsRepositoryInterface
     */
    private $repository;

    /**
     * ExampleService constructor.
     * @param ContainerInterface $container
     * @param AccountsRepositoryInterface $repository
     */
    public function __construct(
        ContainerInterface $container,
        AccountsRepositoryInterface $repository
    ) {
        $this->container = $container;
        $this->repository = $repository;
    }

    /**
     * @param CommandQueryInterface $commandQuery
     */
    public function __invoke(CommandQueryInterface $commandQuery)
    {
        // TODO: Implement __invoke() method.
    }
}