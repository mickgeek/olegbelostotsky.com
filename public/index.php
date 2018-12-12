<?php

use App\Kernel;
use Zend\Diactoros\{ServerRequestFactory, Server};

require_once(__DIR__ . '/../vendor/autoload.php');

$request = ServerRequestFactory::fromGlobals();
$response = (new Kernel())->handleRequest($request);
$server = new Server(function ($request, $response, $done) {}, $request, $response);
$server->listen();
