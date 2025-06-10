<?php
    namespace src\controllers;

    use src\services\alunoService;

    class alunoController {
        private $service;

        public function __construct() {
            $this->service = new alunoService();
        }

        public function save() {
            $data = json_decode(file_get_contents("php://input"));
            echo json_encode(
                $this->service->save($data->nome, $data->genero)
            );
            return ['success'=>'Aluno criado'];
        }

        public function showForm() {
            include_once __DIR__.'/../../views/aluno/form.php';
        }
    }
?>