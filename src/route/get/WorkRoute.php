<?php
/**
 * Rotte GET per la gestione dell'avvio lavorazioni
 * --------------------------------------------------
 * @name MachineRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\WorkController as WorkController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/work/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new WorkController($request, $response, $this, $args);
    return $controller->load();
});

$app->get('/work/start', function (Request $request, Response $response, $args) {
    $controller = new WorkController($request, $response, $this, $args);
    return $controller->start();
});

$app->get('/cronwork/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new WorkController($request, $response, $this, $args);
    return $controller->loadCronWork();
});

$app->get('/machine/cronwork/active/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new WorkController($request, $response, $this, $args);
    return $controller->checkMachineActiveCronWork();
});