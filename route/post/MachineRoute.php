<?php
/**
 * Rotte per la gestione delle macchine
 * ------------------------------------
 * @name MachineRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\MachineController as machineController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/machine/save', function (Request $request, Response $response, $args) {
    $controller = new MachineController($request, $response, $this, $args);
    return $controller->save();
});

