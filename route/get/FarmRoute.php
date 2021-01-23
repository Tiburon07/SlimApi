<?php
/**
 * Rotte GET per la gestione delle farm
 * --------------------------------
 * @name FarmRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\FarmController as FarmController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/farm/active/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new FarmController($request, $response, $this, $args);
    return $controller->load();
});

$app->get('/farm/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new FarmController($request, $response, $this, $args);
    return $controller->load();
});

$app->get('/farm/delete[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new FarmController($request, $response, $this, $args);
    return $controller->delete();
});

$app->get('/farm[/{active}]', function (Request $request, Response $response, $args) {
    $controller = new FarmController($request, $response, $this, $args);
    $controller->farm();
});

$app->get('/farm/active/{id}', function (Request $request, Response $response, $args) {
    $controller = new FarmController($request, $response, $this, $args);
    return $controller->setActive();
});

$app->get('/farm/wkt/{id}', function (Request $request, Response $response, $args) {
    $controller = new FarmController($request, $response, $this, $args);
    return $controller->wkt();
});

$app->get('/farm/calibration/popup/{oLat}/{oLon}[/{dLat}/{dLon}]', function (Request $request, Response $response, $args) {
    $controller = new FarmController($request, $response, $this, $args);
    return $controller->calibrationPopup();
});

$app->get('/farm/calibration/{id}', function (Request $request, Response $response, $args) {
    $controller = new FarmController($request, $response, $this, $args);
    return $controller->calibration();
});



