<?php
/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 12/07/2019
 * Time: 11:12
 */

use arcadia\controller\HomeController as HomeController;
use arcadia\model\FarmModel as FarmModel;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function (Request $request, Response $response) {
    $controller = new HomeController($request, $response, $this);
    $controller->home();
});

$app->get('/cleanSession', function (Request $request, Response $response) {
    if(empty($_SESSION))
        session_start();
    $farm = new FarmModel();
    $farm->setActiveFarm(null);
    $af = $farm->getActiveFarm();
    echo "Active Farm: @" . $af . "@";
    if($af != null)
        var_dump($_SESSION);
});

$app->get('/session', function (Request $request, Response $response) {
    if(empty($_SESSION))
        session_start();
    var_dump( $_SESSION );
});