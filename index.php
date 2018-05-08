<?php
require  'vendor/autoload.php';
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use MyApi\Controllers\CategoriaController;

$app = new \Slim\App;

$app->get('/categoria',function(Request $request, Response $response, array  $arqs) {
    $resp = json_encode([
        "api"=>"CATEGORIA",
        "version"=>"1.0.0"
    ]);
    $categoriaController = new CategoriaController();
    $resp = $categoriaController->get();
    return $response->withJson($resp,200);
});

$app->get('/', function(){
    echo json_encode([
        "api"=>"API DEMO",
        "version"=>"1.0.0"
    ]);
});


$app->run();