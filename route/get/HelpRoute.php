<?php
/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 12/07/2019
 * Time: 11:12
 */

use arcadia\controller\HelpController as HelpController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/help[/{view}[/{id}]]', function (Request $request, Response $response, $args) {
    $controller = new HelpController($request, $response, $this, $args);
    $controller->showMessage();
});


