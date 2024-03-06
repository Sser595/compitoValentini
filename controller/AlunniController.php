<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once("Classe.php");

class AlunniController {
    function createAlunno(Request $request, Response $response, $args){
        $body = $request -> getBody()->getContents();
        $parsedBody = json_decode($body, true);
        $nome =$parsedBody('nome');
        $cognome =$parsedBody('cognome');
        $eta =$parsedBody('eta');
        $alunno = new Alunno($nome, $cognome, $eta);
        $response ->getBody()-> write($alunno->toString());
        return $response->withHeader('Content-type', 'application/json')->withStatus(201);
    }

    public function list(Request $request, Response $response, array $args) {
        $classroom = new Classe();
    
        $response->getBody()->write(    
            json_encode($classroom)
        );
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function showbyname(Request $request, Response $response, array $args) {
        $classroom = new Classe();
        $alunno = $classroom->getAlunnoByName(($args["name"]));
        if (is_null($alunno)) {
            $response->getBody()->write("Errore");
            return $response->withStatus(400);  
        } else {
            $response->getBody()->write(json_encode($alunno, JSON_PRETTY_PRINT));
            return $response->withHeader("Content-Type", "application/json");
        }
    }
}

?>