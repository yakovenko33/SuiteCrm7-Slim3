<?php


namespace PureSlim\src\AccountsModule\UI\Controllers;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class AccountsController
{
    /**
     * @param $request
     * @param $response
     * @param $args
     */
    public function test(Request $request, Response $response, $args)
    {
        echo "<pre>";
        var_dump("AccountsController::test()");
        die;
    }
}