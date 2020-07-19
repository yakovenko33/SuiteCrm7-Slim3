<?php


namespace PureSlim\src\AccountsModule\Infrastructure\Interfaces;


interface AccountsRepositoryInterface
{
    /**
     * @return mixed
     */
    public function add();

    /**
     * @return mixed
     */
    public function update();

    /**
     * @param $id
     * @return mixed
     */
    public function deleteById($id);
}