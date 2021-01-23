<?php
/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 12/07/2019
 * Time: 11:00
 */

use arcadia\controller\MapController as MapController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/tileStreet', function (Request $request, Response $response) {
    $controller = new MapController();
    $controller->tileStreet($request,$response);
});

$app->get('/tileSatellite', function (Request $request, Response $response) {
    $controller = new MapController();
    $controller->tileSatellite($request,$response);
});

$app->get('/tileEsriWorld', function (Request $request, Response $response) {
    $controller = new MapController();
    $controller->tileEsriWorld($request,$response);
});
