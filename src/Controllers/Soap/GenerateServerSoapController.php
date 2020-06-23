<?php

namespace IziDev\Soap\Controllers\Soap;

use Illuminate\Http\Request;
use IziDev\Soap\ServerSoap;

class GenerateServerSoapController
{
    public function __invoke()
    {
        $request = Request::capture();

        $params = ['uri' => $request->root() . "/soap"];

        $server = new \SoapServer(null, $params);

        $server->setClass(ServerSoap::class);

        $server->handle();
    }
}