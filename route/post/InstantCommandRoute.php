<?php
/**
 * Rotte per la gestione dell'Invio dei comandi alla macchina (POST)
 * ------------------------------------------------------------------
 * @name CommandRoute
 * @author GeoSystems S.r.l.
 * @version 1.0.0 
 *
 */

use arcadia\controller\InstantCommandController as InstantCommandController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/machine/instantcommand/save', function (Request $request, Response $response, $args) {
    $controller = new InstantCommandController($request, $response, $this, $args);
    return $controller->saveInstantAction(); 
});

