<?php

namespace arcadia\controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends BaseController {

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function home(){
        return $this->app->view->render( $this->response, 'home.twig');
    }

}
