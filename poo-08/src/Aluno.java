import java.util.Date;

public class Aluno {
    private String nome;
    private String matricula;
    private Date nascimento;



    public Aluno(String nome, String matricula, Date nascimento) {
        this.nome = nome;
        this.matricula = matricula;
        this.nascimento = nascimento;
    }

    public Aluno() {}

    public Aluno(Date nascimento, String matricula) {
        this.matricula = matricula;
        this.nascimento = nascimento;
    }

    public Aluno(String nome, Date nascimento) {
        this.nome = nome;
        this.nascimento = nascimento;
    }

    public Aluno(String nome, String matricula) {
        this.nome = nome;
        this.matricula = matricula;
    }

    

    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
    }



    public String getMatricula() {
        return matricula;
    }
    public void setMatricula(String matricula) {
        this.matricula = matricula;
    }


    
    public Date getNascimento() {
        return nascimento;
    }
    public void setNascimento(Date nascimento) {
        this.nascimento = nascimento;
    }

    
    
}
