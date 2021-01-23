<?php
/**
 * Rotte POST per la gestione dei Percorsi
 * -----------------------------------------
 * @name TrackRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\TrackController as TrackController;
use arcadia\controller\TrackWorkController as TrackWorkController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//-----------------------------------------------------------------------------------------------

$app->post('/trackaux/save', function (Request $request, Response $response, $args) {
    $controller = new TrackController($request, $response, $this, $args);
    return $controller->save(true);
});

$app->post('/track/save', function (Request $request, Response $response, $args) {
    $controller = new TrackController($request, $response, $this, $args);
    return $controller->save(false);
});

//-----------------------------------------------------------------------------------------------

$app->post('/trackwork/save', function (Request $request, Response $response, $args) {
    $controller = new TrackWorkController($request, $response, $this, $args);
    return $controller->save();
});


