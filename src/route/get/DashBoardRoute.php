<?php

namespace arcadia\controller; 

use arcadia\controller\DashBoardController as DashBoardController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/dashboard/load[/{id}]', function (Request $request, Response $response, $args) {
    $controller = new DashBoardController($request, $response, $this, $args);
    return $controller->load();
});


$app->get('/dashboard', function (Request $request, Response $response, $args) {
    $controller = new DashBoardController($request, $response, $this, $args);
    return $controller->dashBoard();
});

// proxyCam route
$app->get('/dashboard/proxyCam', function (Request $request, Response $response, $args) {
    $controller = new DashBoardController($request, $response, $this, $args);
    return $controller->proxyCam($request,$response);
});