<?php
/**
 * Rotte per l'aggiornamento dello stato di una Macchina  (POST)
 * --------------------------------------------------------------
 * @name TracktorApiRoute
 * @author GeoSystems S.r.l.
 * @version 1.4.3
 *
 */

use arcadia\controller\TracktorApiController as TracktorApiController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/tracktorapi/setmachinestatus', function (Request $request, Response $response, $args) {
    $controller = new TracktorApiController($request, $response, $this, $args);
    return $controller->setMachineStatus();
});

#$app-> post('/tracktorapi/setmachineready', function (Request $request,Response $response, $args){
#    $controller = new TracktorApiController($request, $response, $this, $args); 
#    return $controller -> setMachineReady(); 
#});