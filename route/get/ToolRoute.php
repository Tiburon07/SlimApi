<?php
/**
 * Rotte per la gestione dei Tools
 * --------------------------------
 * @name ToolRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\ToolController as ToolController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// recupera gli Attrezzi di una specifica Azienda
$app->get('/tool/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new ToolController($request, $response, $this, $args);
    return $controller->load();
});

// recupera tutti gli Attrezzi
$app->get('/tool/all/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new ToolController($request, $response, $this, $args);
    return $controller->loadAllTools();
});

$app->get('/tool/delete[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new ToolController($request, $response, $this, $args);
    return $controller->delete();
});

$app->get('/tool', function (Request $request, Response $response, $args) {
    $controller = new ToolController($request, $response, $this, $args);
    return $controller->tool();
});

