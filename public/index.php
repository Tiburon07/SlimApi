<?php

require '../vendor/autoload.php';

/*modifico l'handler degli errori in modo tale che mi cosideri i php warning come
ErrorException per riuscire a catturarli nel try-catch e poterli vedere nel file di log*/
set_error_handler(function ($err_severity, $err_msg, $err_file, $err_line, array $err_context){
    throw new ErrorException( $err_msg, 0, $err_severity, $err_file, $err_line );
},
    E_WARNING);

error_reporting(0);

try{
    //// instanzio l'oggetto App
    $app = new \Slim\App(['settings' => [
        'displayErrorDetails' => true,
        'debug'               => true]
    ]);

    $container = $app->getContainer();

    $container['logger'] = function($c) {
        $logger = new Logger();
        return $logger;
    };



    // Dico al container dove sono le view di Twig
    $container['view'] = function ($c) {
        $view = new \Slim\Views\Twig([
            '../view/',
            '../view/base/',
            '../view/home/'
        ], ['cache' => false]);

        //Define assets
        //-------------
        $BASEROOT = \arcadia\model\BaseModel::GET_BASE_ROOT();
        $view['assets'] = $BASEROOT ;
        $view['assetCSS']=$BASEROOT."/css";
        $view['assetJS']=$BASEROOT."/js";
        $view['assetIMAGES']=$BASEROOT."/images";
        $view['assetFONTS']=$BASEROOT."/fonts";

        /*
        $view['applicationUrl'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $view['addressSite'] = $BASEROOT;
        $view['baseUrl']=$c['request']->getUri()->getPath();
        */

        return $view;
    };

    //----- Rotte GET ------------------------------------------------------------
    require(__DIR__ . "/../route/get/HomeRoute.php");
    //----------------------------------------------------------------------
    $app->run();

} catch(ErrorException $e){
    $logger->error($e->getMessage());
}
