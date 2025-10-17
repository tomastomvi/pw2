class Produto {
    #nome;
    #preco;
    #estoque;

    constructor(nome, preco, estoque) {
        this.setNome(nome);
        this.setPreco(preco);
        this.setEstoque(estoque);
    }

    
    getNome() {
        return this.#nome;
    }

    setNome(valor) {
        this.#nome = valor;
    }

    
    getPreco() {
        return this.#preco;
    }

    setPreco(valor) {
        if (valor > 0) {
            this.#preco = valor;
        } else {
            console.error("O preço deve ser maior que zero.");
        }
    }

  
    getEstoque() {
        return this.#estoque;
    }

    setEstoque(valor) {
        if (Number.isInteger(valor) && valor >= 0) {
            this.#estoque = valor;
        } else {
            console.error("O estoque deve ser um número inteiro e não negativo.");
        }
    }

  
    vender(qtd) {
        if (qtd > this.#estoque) {
            console.error("Estoque insuficiente para realizar a venda.");
        } else if (qtd <= 0) {
            console.error("A quantidade deve ser maior que zero.");
        } else {
            this.#estoque -= qtd;
            console.log(`Venda realizada com sucesso! Quantidade vendida: ${qtd}`);
        }
    }
}


const produto = new Produto("Camiseta", 50, 10);

console.log("Nome do Produto:", produto.getNome());
console.log("Preço do Produto: R$", produto.getPreco());
console.log("Estoque Atual:", produto.getEstoque());

produto.vender(3); 
console.log("Estoque Após Venda:", produto.getEstoque());

produto.setPreco(-10); 
produto.setEstoque(-5); 
produto.vender(15); 