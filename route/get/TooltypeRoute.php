<?php
/**
 * Rotte per la gestione della tipologia dei Tools (GET)
 * -----------------------------------------------------
 * @name TooltypeRoute
 * @author GeoSystems S.r.l.
 * @version 1.0.0
 *
 */

use arcadia\controller\TooltypeController as TooltypeController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// recupera le Tipologie Attrezzi di una specifica Azienda
$app->get('/tooltype/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new TooltypeController($request, $response, $this, $args);
    return $controller->load();
});

$app->get('/tooltype/delete[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new TooltypeController($request, $response, $this, $args);
    return $controller->delete();
});

$app->get('/tooltype', function (Request $request, Response $response, $args) {
    $controller = new TooltypeController($request, $response, $this, $args);
    return $controller->tooltype();
});