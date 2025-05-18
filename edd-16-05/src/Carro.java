public class Carro implements Comparable<Carro> {
    private String modelo;
    private int prioridade;

    public Carro(String modelo, int prioridade) {
        this.modelo = modelo;
        this.prioridade = prioridade;
    }

    public Carro(String modelo) {
        this.modelo = modelo;
        this.prioridade = 0;
    }

    public String getModelo() {
        return modelo;
    }
    public int getPrioridade() {
        return prioridade;
    }

    public void setPrioridade(int prioridade) {
        this.prioridade = prioridade;
    }

    @Override
    public int compareTo(Carro c) {
        return Integer.compare(c.prioridade, prioridade);
    }
}
