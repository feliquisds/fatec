export class Veiculo {
    nome = ''

    constructor(nome) {
        this.nome = nome
    }

    get nome() {
        return this.nome
    }
}