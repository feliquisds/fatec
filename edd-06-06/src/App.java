public class App {
    public static void CycleNodes(Node<String> node) {
        System.out.println(node.getValor());
        for (Node<String> node_ : node.getFilho()) CycleNodes(node_);
    }

    public static void main(String[] args) throws Exception {
        Tree<String> jose = new Tree<String>("José");

        Node<String> fernando = new Node<>("Fernando");
        Node<String> maria = new Node<>("Maria");
        jose.getRaiz().add(fernando);
        jose.getRaiz().add(maria);

        Node<String> enzo = new Node<>("Enzo");
        Node<String> leticia = new Node<>("Leticia");
        Node<String> paloma = new Node<>("Paloma");
        fernando.add(enzo);
        fernando.add(leticia);
        fernando.add(paloma);
        
        Node<String> erick = new Node<>("Erick");
        Node<String> fernanda = new Node<>("Fernanda");
        maria.add(erick);
        maria.add(fernanda);

        Node<String> amanda = new Node<>("Amanda");
        enzo.add(amanda);

        CycleNodes(jose.getRaiz());
    }
}
