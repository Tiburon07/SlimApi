<?php
/**
 * Rotte per la gestione dei comandi (POST)
 * ----------------------------------------
 * @name CommandRoute
 * @author GeoSystems S.r.l.
 * @version 1.0.0
 *
 */

use arcadia\controller\CommandController as CommandController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/command/save', function (Request $request, Response $response, $args) {
    $controller = new CommandController($request, $response, $this, $args);
    return $controller->save();
});
