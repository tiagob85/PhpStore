<?php

class LojaService{
    private $conexao;
    private $secao;
    private $marca;
    private $fornecedor;
    private $produto;

    public function __construct(Conexao $conexao){
        $this->conexao = $conexao->conectar();
    }

    public function inserirSecao(Secao $secao){
        $this->secao = $secao;
        $query = 'insert into secao(nome)values(:nome)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->secao->__get('descricao'));
        $stmt->execute();
    }

    public function inserirMarca(Marca $marca){
        $this->marca = $marca;
        $query = 'insert into marca(nome)values(:nome)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->marca->__get('descricao'));
        $stmt->execute();        
    }

    public function inserirFornecedor(Fornecedor $fornecedores){
        $this->fornecedor = $fornecedores;
        $query="insert into fornecedor(cnpj, nome, razaosocial,endereco, numero, bairro, cidade, estado, cep, telresidencial,".
                "telcelular, nomerepresentante, observacao, email)values(:cnpj, :nome, :razaosocial, :endereco, :numero, ".
                ":bairro, :cidade, :estado, :cep, :telresidencial, :telcelular, :nomerepresentante, :observacao, :email)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':cnpj', $this->fornecedor->__get('cnpj'));
        $stmt->bindValue(':nome', $this->fornecedor->__get('nome'));
        $stmt->bindValue(':razaosocial', $this->fornecedor->__get('razaosocial'));
        $stmt->bindValue(':endereco', $this->fornecedor->__get('endereco'));
        $stmt->bindValue(':numero', $this->fornecedor->__get('numero'));
        $stmt->bindValue(':bairro', $this->fornecedor->__get('bairro'));
        $stmt->bindValue(':cidade', $this->fornecedor->__get('cidade'));
        $stmt->bindValue(':estado', $this->fornecedor->__get('estado'));
        $stmt->bindValue(':cep', $this->fornecedor->__get('cep'));
        $stmt->bindValue(':telresidencial', $this->fornecedor->__get('telresidencial'));
        $stmt->bindValue(':telcelular', $this->fornecedor->__get('telcelular'));
        $stmt->bindValue(':nomerepresentante', $this->fornecedor->__get('nomerepresentante'));
        $stmt->bindValue(':observacao', $this->fornecedor->__get('observacao'));
        $stmt->bindValue(':email', $this->fornecedor->__get('email'));
        $stmt->execute();
    }

}

?>