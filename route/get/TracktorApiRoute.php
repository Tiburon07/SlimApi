<?php

/**
 * Rotte per il recupero del percorso di una Macchina (GET)
 * ---------------------------------------------------------
 * @name TracktorApiRoute
 * @author GeoSystems S.r.l.
 * @version 1.4.3
 *
 */

use arcadia\controller\TracktorApiController as TracktorApiController;
use arcadia\controller\TracktorApiDelaunayController as TracktorApiDelaunayController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/tracktorapi/getwork/{idMachine}', function (Request $request, Response $response, $args) {
    $controller = new TracktorApiController($request, $response, $this, $args);
    return $controller->getWork();
});

$app-> get('/tracktorapi/setmachineready/{idMachine}', function (Request $request,Response $response, $args){
    $controller = new TracktorApiController($request, $response, $this, $args); 
    return $controller -> setMachineReady(); 
});

$app-> get('/tracktorapi/getsrc/{idFarm}',function (Request $request,Response $response, $args){
    $controller = new TracktorApiDelaunayController($request, $response, $this, $args);
    return $controller -> getSrc();
});

$app-> get('/tracktorapi/getdst/{idFarm}',function (Request $request,Response $response, $args){
    $controller = new TracktorApiDelaunayController($request, $response, $this, $args);
    return $controller -> getDst();
});

$app->get('/tracktorapi/getworkDelaunay/{idMachine}', function (Request $request, Response $response, $args) {
    $controller = new TracktorApiDelaunayController($request, $response, $this, $args);
    return $controller->getWorkDelaunay();
});

$app->get('/tracktorapi/getTrackWork/{idMachine}', function (Request $request, Response $response, $args) {
    $controller = new TracktorApiDelaunayController($request, $response, $this, $args);
    return $controller->getTrack();
});

$app->get('/tracktorapi/gettrack_machine/{idMachine}', function (Request $request, Response $response, $args) {
    $controller = new TracktorApiDelaunayController($request, $response, $this, $args);
    return $controller->selecttrack();
});