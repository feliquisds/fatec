import java.util.*;

public class App {
    public static void main(String[] args) {
        // pedagio();
        PriorityQueue<Carro> fila = new PriorityQueue<>();
        fila.add(new Carro("Uno"));
        fila.add(new Carro("Gol"));
        fila.add(new Carro("Ambulancia", 1));
        fila.add(new Carro("Policia", 1));

        while (!fila.isEmpty()) {
            Carro car = fila.poll();
            System.out.println(car.getModelo() + " passou pelo pedágio.");
        }
    }

    public static void pedagio() {
        Queue<String> fila_carros = new LinkedList<>();
        fila_carros.offer("Uno");
        fila_carros.offer("Santana");
        fila_carros.offer("Fusca");

        System.out.println("Situação: " + fila_carros);

        while (!fila_carros.isEmpty()) {
            String carro = fila_carros.poll();
            System.out.println("Carro passou: " + carro);
        }
    }

    public static void testefila() {
        Queue<String> fila_carros = new LinkedList<>();
        fila_carros.offer("Uno");
        fila_carros.offer("Santana");
        fila_carros.offer("Fusca");

        System.out.println("Existe: " + fila_carros.size());

        for (String string : fila_carros) {
            System.out.println(string);
        }

        System.out.println("Situação: " + fila_carros);

        System.out.println("Início: " + fila_carros.peek());
        
        String car = fila_carros.poll();
        System.out.println("Carro removido: " + car);
        System.out.println("Situação: " + fila_carros);
    }
}
