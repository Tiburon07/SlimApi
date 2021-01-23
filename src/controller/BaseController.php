<?php

namespace arcadia\controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class BaseController {
    protected $app;
    protected $args;
    protected $request;
    protected $response;

    /**
     * BaseController constructor.
     * @param Request $request
     * @param Response $response
     * @param $app
     * @param $args
     */
    public function __construct(Request $request, Response $response, $app, $args=array()){
        if($args=== null) $args = array();
        $this->app=$app;
        $this->request = $request;
        $this->response = $response;
        $this->args = $args;
        if(empty($_SESSION))
            session_start();
    }

    /**
     * @param $key - chiave del parametro
     * @param null $default - valore di default da assegnare al parametro se non presente
     * @return string
     */
    public function getParam($key, $default=null){
        $param = $default;
        if(array_key_exists($key, $this->args))
            $param = $this->args[$key];
        return $param;
    }

    public function renderError( $e ){
        $data = array(
            "message" => $e->getMessage(),
            "code" => (string)$e->getCode(),
            "file" => $e->getFile(),
            "line" => (string)$e->getLine(),
            "trace" => $e->getTraceAsString()
        );
        return $this->app->view->render($this->response, 'error.twig', $data);
    }
}
