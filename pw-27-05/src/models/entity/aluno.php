<?php
    namespace src\models\entity;

    class aluno {
        private $id;
        private $nome;
        private $genero;

        public function __construct($nome, $genero) {
            $this -> nome = $nome;
            $this -> genero = $genero;
        }
        
        public function getId() {
            return $this -> id;
        }
        
        public function getNome() {
            return $this -> nome;
        }
        
        public function getGenero() {
            return $this -> genero;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setNome($nome) {
            $this -> nome = $nome;
        }

        public function setGenero($genero) {
            $this -> genero = $genero;
        }
    }
?>