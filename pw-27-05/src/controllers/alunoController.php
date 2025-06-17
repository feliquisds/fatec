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
        }
        
        public function update($id) {
            $data = json_decode(file_get_contents("php://input"));
            echo json_encode(
                $this->service->update($id, $data->nome, $data->genero)
            );
        }

        public function remove($id) {
            echo json_encode($this->service->remove($id));
        }
        
        public function read($id) {
            echo json_encode($this->service->read($id));
        }

        public function list() {
            echo json_encode($this->service->list());
        }

        public function showForm() {
            include_once __DIR__.'/../../public/views/aluno/form.php';
        }

        public function hello() {
            echo 'hello world';
        }
    }
?>