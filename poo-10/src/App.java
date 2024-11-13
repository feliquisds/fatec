public class App {
    public static void main(String[] args) throws Exception {
        Mensalista m1 = new Mensalista("José", "ABC", "Junior");
        Horista h1 = new Horista("Maria", "DEF", 10);

        m1.calcularSalario();
        System.out.println("MENSALISTA: " + m1.getNome());
        System.out.println("INSS: " + m1.calcularINSS());
        System.out.println("IR: " + m1.calcularIR());
        System.out.println("SALARIO: " + m1.getSalario());

        h1.calcularSalario();
        System.out.println("HORISTA: " + h1.getNome());
        System.out.println("INSS: " + h1.calcularINSS());
        System.out.println("IR: " + h1.calcularIR());
        System.out.println("SALARIO: " + h1.getSalario());
    }
}