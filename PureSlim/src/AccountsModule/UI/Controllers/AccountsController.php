<?php


namespace PureSlim\src\AccountsModule\UI\Controllers;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use PureSlim\src\AccountsModule\Application\Services\ExampleService;

class AccountsController
{
    /**
     * @var
     */
    private $exampleService;

    /**
     * AccountsController constructor.
     * @param ExampleService $exampleService
     */
    public function __construct(ExampleService $exampleService)
    {
        $this->exampleService = $exampleService;
    }

    /**
     * @param $request
     * @param $response
     * @param $args
     */
    public function test(Request $request, Response $response, $args)
    {
        $this->exampleService->test();
        echo "<pre>";
        var_dump("AccountsController::test()");
        die;
    }
}