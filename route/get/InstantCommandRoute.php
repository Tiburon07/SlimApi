<?php
/**
 * Rotte per la gestione dell'Invio dei comandi alla macchina (GET)
 * ------------------------------------------------------------------s
 * @name CommandRoute
 * @author GeoSystems S.r.l. 
 * @version 1.0.0
 *
 */

use arcadia\controller\InstantCommandController as InstantCommandController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Prelevamento dati dalla tabella dei Comandi (tabella "command")
$app->get('/machine/instantcommand/command/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new InstantCommandController($request, $response, $this, $args);
    return $controller->loadCommand(); 
});

// Prelevamento dati dalla tabella dei Comandi Immediati (tabella "instant_action")
$app->get('/machine/instantcommand/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new InstantCommandController($request, $response, $this, $args);
    return $controller->loadInstantAction(); 
});

// Prelevamento storico dei Comandi inviati ad una specifica Macchina
$app->get('/machine/instantcommand/history/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new InstantCommandController($request, $response, $this, $args);
    return $controller->loadMachineCommandHistory(); 
});


$app->get('/machine/instantcommand/delete[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new InstantCommandController($request, $response, $this, $args);
    return $controller->delete();
});

$app->get('/machine/instantcommand', function (Request $request, Response $response, $args) {
    $controller = new InstantCommandController($request, $response, $this, $args);
    return $controller->instantCommand();
});
