<?php
/**
 * Rotte per la gestione dei comandi (GET)
 * ----------------------------------------
 * @name CommandRoute
 * @author GeoSystems S.r.l. 
 * @version 1.0.0
 *
 */

use arcadia\controller\CommandController as CommandController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/command/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new CommandController($request, $response, $this, $args);
    return $controller->load();
});

$app->get('/command/delete[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new CommandController($request, $response, $this, $args);
    return $controller->delete();
});

$app->get('/command', function (Request $request, Response $response, $args) {
    $controller = new CommandController($request, $response, $this, $args);
    return $controller->command();
});

$app->get('/trackwork/loadallcommand', function (Request $request, Response $response, $args) {
    $controller = new CommandController($request, $response, $this, $args);
    return $controller->loadAll();
});
