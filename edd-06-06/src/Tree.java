public class Tree<T> {
    private Node<T> raiz;

    public Tree(T raiz) {
        this.raiz = new Node<>(raiz);
    }

    public Node<T> getRaiz() {
        return raiz;
    }

    public void setRaiz(Node<T> raiz) {
        this.raiz = raiz;
    }
}
