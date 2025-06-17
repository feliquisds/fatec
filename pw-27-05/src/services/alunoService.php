<?php
    namespace src\services;

    use src\models\entity\aluno;
    use src\models\repository\alunoRepository;

    class alunoService {
        private $aluno;

        public function __construct() {
            $this -> aluno = new alunoRepository();
        }

        public function save($nome, $genero) {
            $aluno = new aluno($nome, $genero);
            $this -> aluno -> save($aluno);
        }
        
        public function update($id, $nome, $genero) {
            $aluno = new aluno($nome, $genero);
            $aluno->setId($id);
            $this -> aluno -> update($aluno);
        }

        public function read($id) {
            return $this->aluno->findByID($id);
        }

        public function remove($id) {
            return $this->aluno->delete($id);
        }

        public function list() {
            return $this->aluno->findAll();
        }
    }
?>