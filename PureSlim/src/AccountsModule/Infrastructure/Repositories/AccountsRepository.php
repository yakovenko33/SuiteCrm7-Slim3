<?php


namespace PureSlim\src\AccountsModule\Infrastructure\Repositories;


use PureSlim\src\AccountsModule\Infrastructure\Interfaces\AccountsRepositoryInterface;

class AccountsRepository implements AccountsRepositoryInterface
{
    public function add()
    {
        // TODO: Implement add() method.
        var_dump("AccountsRepository::add()");
    }

    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
        var_dump("AccountsRepository::deleteById()");
    }

    /**
     * @return mixed|void
     */
    public function update()
    {
        // TODO: Implement update() method.
        var_dump("AccountsRepository::update()");
    }
}