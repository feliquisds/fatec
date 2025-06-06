import java.util.ArrayList;
import java.util.List;

public class Node<T> {
    private T valor;
    private List<Node<T>> filho;

    public Node(T valor) {
        this.valor = valor;
        this.filho = new ArrayList<>();
    }

    public T getValor() {
        return valor;
    }

    public void setValor(T valor) {
        this.valor = valor;
    }

    public List<Node<T>> getFilho() {
        return filho;
    }

    public void setFilho(List<Node<T>> filho) {
        this.filho = filho;
    }
    
    public void add(Node<T> filho) {
        this.filho.add(filho);
    }
}
