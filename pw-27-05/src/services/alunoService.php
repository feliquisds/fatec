<?php
    namespace src\services;

    use src\models\entity\aluno;
    use src\models\repository\alunoRepository;

    class alunoService {
        private $aluno;

        public function __construct() {
            $this -> aluno = new alunoRepository();
        }

        public function criar($nome, $genero) {
            $aluno = new aluno($nome, $genero);
            $this -> aluno -> save($aluno);
        }
    }
?>