<?php


namespace PureSlim\src\AccountsModule\Application\Services;


use PureSlim\src\AccountsModule\Infrastructure\Interfaces\AccountsRepositoryInterface;

class ExampleService
{
    /**
     * @var AccountsRepositoryInterface
     */
    private $repository;

    /**
     * ExampleService constructor.
     * @param AccountsRepositoryInterface $repository
     */
    public function __construct(AccountsRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     *
     */
    public function test()
    {
        var_dump("ExampleService::test()");
    }
}