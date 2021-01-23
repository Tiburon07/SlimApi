<?php
/**
 * Rotte GET per la gestione dei percorsi
 * ---------------------------------------
 * @name TrackRoute
 * @author GeoSystems S.r.l. - LM
 * @version 1.0.0
 *
 */

use arcadia\controller\TrackController as TrackController;
use arcadia\controller\TrackWorkController as TrackWorkController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/trackaux', function (Request $request, Response $response, $args) {
    $controller = new TrackController($request, $response, $this, $args);
    return $controller->aux();
});

$app->get('/trackaux/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new TrackController($request, $response, $this, $args);
    return $controller->load(true);
});

$app->get('/trackaux/delete[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new TrackController($request, $response, $this, $args);
    return $controller->delete();
});

$app->get('/trackaux/wkt/{id}', function (Request $request, Response $response, $args) {
    $controller = new TrackController($request, $response, $this, $args);
    return $controller->wkt();
});

$app->get('/trackaux/others/{id}', function (Request $request, Response $response, $args) {
    $controller = new TrackController($request, $response, $this, $args);
    return $controller->others();
});

$app->get('/trackaux/landplot/{id}', function (Request $request, Response $response, $args) {
    $controller = new TrackController($request, $response, $this, $args);
    return $controller->landplot(true);
});

//----------------------------------------------------------------

$app->get('/trackwork', function (Request $request, Response $response, $args) {
    $controller = new TrackController($request, $response, $this, $args);
    return $controller->work();
});

$app->get('/trackwork/load[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new TrackWorkController($request, $response, $this, $args);
    return $controller->load();
});

$app->get('/trackwork/delete[/{id}/{extraParam}]', function (Request $request, Response $response, $args) {
    $controller = new TrackWorkController($request, $response, $this, $args);
    return $controller->delete();
});

$app->get('/trackwork/remarkable[/{id}]', function (Request $request, Response $response, $args) {
    $controller = new TrackWorkController($request, $response, $this, $args);
    return $controller->getRemarkablePoints();
});

$app->get('/trackwork/sequence/{id}', function (Request $request, Response $response, $args) {
    $controller = new TrackWorkController($request, $response, $this, $args);
    return $controller->getSequence();
});

$app->get('/trackwork/actionpoint/{id}', function (Request $request, Response $response, $args) {
    $controller = new TrackWorkController($request, $response, $this, $args);
    return $controller->getActionPoint();
});


