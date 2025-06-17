<?php
    namespace src\models\repository;

    use src\config\connection;
    use src\models\entity\aluno;
    use PDO;

    class alunoRepository {
        public $conn;

        public function __construct() {
            $database = new connection();
            $this -> conn = $database -> getConnection();
        }

        public function save(aluno $aluno) {
            $query = "INSERT INTO aluno (nome, genero) VALUES (:nome, :genero)";
            $stmt = $this -> conn -> prepare($query);

            $nome = $aluno->getNome();
            $genero = $aluno->getGenero();
            
            $stmt -> bindParam(":nome", $nome);
            $stmt -> bindParam(":genero", $genero);
            
            $stmt -> execute();
        }
        
        public function findAll() {
            $query = "SELECT * FROM aluno";
            $stmt = $this -> conn -> prepare($query);
            $stmt -> execute();
            return $stmt -> fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function findByID($id) {
            $query = "SELECT * FROM aluno WHERE id = :id";
            $stmt = $this -> conn -> prepare($query);
            $stmt -> bindParam(":id", $id);
            $stmt -> execute();
            return $stmt -> fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function update(aluno $aluno) {
            $query = "UPDATE aluno SET nome = :nome, genero = :genero WHERE id = :id";
            $stmt = $this -> conn -> prepare($query);

            $nome = $aluno->getNome();
            $genero = $aluno->getGenero();
            $id = $aluno->getId();
            
            $stmt -> bindParam(":nome", $nome);
            $stmt -> bindParam(":genero", $genero);
            $stmt -> bindParam(":id", $id);
            $stmt -> execute();
        }
        
        public function delete($id) {
            $query = "DELETE FROM aluno WHERE id = :id";
            $stmt = $this -> conn -> prepare($query);
            $stmt -> bindParam(":id", $id);
            $stmt -> execute();
        }
    }
?>