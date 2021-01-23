<?php
/**
 * Rotte per la gestione della tipologia dei Tools (POST)
 * -------------------------------------------------------
 * @name TooltypeRoute
 * @author GeoSystems S.r.l.
 * @version 1.0.0
 *
 */

use arcadia\controller\TooltypeController as TooltypeController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/tooltype/save', function (Request $request, Response $response, $args) {
    $controller = new TooltypeController($request, $response, $this, $args);
    return $controller->save();
});