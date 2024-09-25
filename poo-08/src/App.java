import java.util.Date;

public class App {
    public static void main(String[] args) throws Exception {
        Aluno a = new Aluno("felix", "23", new Date("03/08/2005"));
        Aluno a1 = new Aluno();
        Aluno a2 = new Aluno(new Date("03/08/2005"), "23");
        Aluno a3 = new Aluno("felix", new Date("03/08/2005"));
        Aluno a4 = new Aluno("felix", "23");

        System.out.println("nome: " + a.getNome());
        System.out.println("nome: " + a1.getNome());
        System.out.println("nome: " + a2.getNome());
        System.out.println("nome: " + a3.getNome());
        System.out.println("nome: " + a4.getNome());
    }
}
