public class Aluno {
    private String nome;
    private String ra;
    private int idade;
    private String genero;
    private boolean status;

    public Aluno(String nome, String ra, int idade, String genero, boolean status) {
        this.nome = nome;
        this.ra = ra;
        this.idade = idade;
        this.genero = genero;
        this.status = status;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }
    public String getNome() {
        return nome;
    }
}
