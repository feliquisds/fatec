<?php
    require_once __DIR__.'/../vendor/autoload.php';
    use src\routes\routes;
    use src\controllers\alunoController;

    $route = new routes();
    // backend using API
    $route->add('POST', 'api/aluno', [new alunoController, 'save']);
    
    $route->add('GET', '/hello', [new alunoController, 'hello']);

    // backend using PHP with frontend using PHP
    $route->add('GET', 'aluno/cadastro', [new alunoController, 'showForm']);

    $route->handleRequest();
?>

