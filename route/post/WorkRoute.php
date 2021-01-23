<?php
/**
 * Rotte POST per la gestione dell'avvio lavorazioni
 * --------------------------------------------------------------
 * @name TracktorApiRoute
 * @author GeoSystems S.r.l.
 * @version 1.4.3
 *
 */

namespace arcadia\controller; 

use arcadia\controller\WorkController as WorkController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/work/save', function (Request $request, Response $response, $args) {
    $controller = new WorkController($request, $response, $this, $args);
    return $controller->saveCronWork();
});

