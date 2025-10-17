import { pessoa } from './index.js';

export class funcionario  extends pessoa {
    constructor(nome, idade, cargo) {
        super(nome, idade);
        this.cargo = cargo ;
    }

    apresentar() {
        console.log(`Olá, meu nome é ${this.nome}, tenho ${this.idade} anos e sou ${this.cargo}.`);  
    }
}