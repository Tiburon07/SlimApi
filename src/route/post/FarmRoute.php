<?php
/**
 * Rotte POST per la gestione delle farm
 * --------------------------------
 * @name FarmRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\FarmController as FarmController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/farm/save', function (Request $request, Response $response, $args) {
    $controller = new FarmController($request, $response, $this, $args);
    return $controller->save();
});


