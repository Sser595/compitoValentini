<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require 'Classe.php';
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controller/AlunniController.php';
require __DIR__ . '/controller/indexController.php';

$app = AppFactory::create();

/*$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/alunni', function (Request $request, Response $response, $args) {
    $classroom = new Classe();
    
    $response->getBody()->write(
        $classroom->toString()    
    );
    return $response;
});

$app->get('/alunni/{nome}', function ($request, $response, array $args) {
    $classroom = new Classe();
    if($classroom-> getAlunnoByName($args['nome'])== null) {
        $response->getBody()->write("Alunno non presente");
    }
    else{
        $response->getBody()->write(
            $classroom->getAlunnoByName($args['nome'])
        );
    }
    return $response;
});*/

$app->get("/api/alunni", "AlunniController:list");
$app->get("/api/alunni/{name}", "AlunniController:showbyname");

$app->run();
