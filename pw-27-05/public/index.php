<?php
    require_once __DIR__.'/../vendor/autoload.php';
    use src\routes\routes;
    use src\controllers\alunoController;

    $route = new routes();
    // backend using API
    $route->add('POST', '/api/aluno', [new alunoController, 'save']);
    $route->add('GET', '/api/aluno/{id}', [new alunoController, 'read']);
    $route->add('POST', '/api/aluno/{id}', [new alunoController, 'update']);
    $route->add('DELETE', '/api/aluno/{id}', [new alunoController, 'remove']);
    $route->add('GET', '/api/alunos', [new alunoController, 'list']);
    
    $route->add('GET', '/hello', [new alunoController, 'hello']);

    // backend using PHP with frontend using PHP
    $route->add('GET', 'aluno/cadastro', [new alunoController, 'showForm']);

    $route->handleRequest();
?>

