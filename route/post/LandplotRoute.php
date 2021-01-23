<?php
/**
 * Rotte POST per la gestione degli Appezzamenti
 * ----------------------------------------------
 * @name LandplotRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\LandplotController as LandplotController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/landplot/save', function (Request $request, Response $response, $args) {
    $controller = new LandplotController($request, $response, $this, $args);
    return $controller->save();
});


