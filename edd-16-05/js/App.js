import { Veiculo } from "./Veiculo.js"; 

let carro = [];
carro.push(["Uno", 0]);
carro.push(["Gol", 1]);
carro.push(["Santana", 0]);

let fila_priori = [
    {modelo: "Uno", prioridade: 0},
    {modelo: "Gol", prioridade: 0},
    {modelo: "Santana", prioridade: 1},
]

fila_priori.sort((a, b) => b.prioridade - a.prioridade);

console.log(fila_priori);

const a = new Veiculo('teste')
a.nome = "teste2"
console.log(a.nome)