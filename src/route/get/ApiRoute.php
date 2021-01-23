<?php
/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 12/07/2019
 * Time: 11:12
 */

use arcadia\controller\ApiController as ApiController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/api/js[/{version}]', function (Request $request, Response $response, $args) {
    $controller = new ApiController($request, $response, $this, $args);
    return $controller->getJs();
});


