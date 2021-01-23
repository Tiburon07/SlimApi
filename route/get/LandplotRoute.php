<?php
/**
 * Rotte per la gestione degli appezzamenti
 * --------------------------------
 * @name LandplotRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\LandplotController as LandplotController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/landplot', function (Request $request, Response $response, $args) {
    $controller = new LandplotController($request, $response, $this, $args);
    return $controller->landplot();
});

$app->get('/landplot/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new LandplotController($request, $response, $this, $args);
    return $controller->load();
});

$app->get('/landplot/delete[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new LandplotController($request, $response, $this, $args);
    return $controller->delete();
});

$app->get('/landplot/wkt/{id}', function (Request $request, Response $response, $args) {
    $controller = new LandplotController($request, $response, $this, $args);
    return $controller->wkt();
});

$app->get('/landplot/inoutpoint/{id}', function (Request $request, Response $response, $args) {
    $controller = new LandplotController($request, $response, $this, $args);
    return $controller->inoutPoints();
});



