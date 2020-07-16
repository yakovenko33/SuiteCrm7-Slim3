<?php


namespace CustomerSlim\UI\Controllers;


class TestController
{
    /**
     *
     */
    public function test($request, $response, $args)
    {
        echo "<pre>";
        var_dump("TestController::test()");
        die;
    }
}