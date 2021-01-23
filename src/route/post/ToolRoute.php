<?php
/**
 * Rotte per la gestione dei Tool
 * --------------------------------
 * @name ToolController
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\ToolController as ToolController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/tool/save', function (Request $request, Response $response, $args) {
    $controller = new ToolController($request, $response, $this, $args);
    return $controller->save();
});