<?php
/**
 * Rotte per la gestione delle macchine
 * ------------------------------------
 * @name MachineRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\MachineController as MachineController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/machine/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new MachineController($request, $response, $this, $args);
    return $controller->load();
});

$app->get('/machine/active/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new MachineController($request, $response, $this, $args);
    return $controller->loadActiveMachine();
});

$app->get('/machine/delete[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new MachineController($request, $response, $this, $args);
    return $controller->delete();
});

$app->get('/machine', function (Request $request, Response $response, $args) {
    $controller = new MachineController($request, $response, $this, $args);
    return $controller->machine();
});

$app->get('/machine/tool', function (Request $request, Response $response, $args) {
    $controller = new MachineController($request, $response, $this, $args);
    return $controller->machineTool();
});

$app->get('/machine/getinfo[/{id}]', function (Request $request, Response $response, $args) {
    $controller = new MachineController($request, $response, $this, $args);
    return $controller->GetInfo();
});

$app->get('/machine/setstatus[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new MachineController($request, $response, $this, $args);
    return $controller->MachineSetStatus();
});

