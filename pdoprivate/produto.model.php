<?php
class Produto{
    private $codigo;
    private $nome;
    private $nomeexibicao;
    private $unidadecompra;
    private $unidadevenda;
    private $descricao;
    private $codsecao;
    private $codfornecedor;
    private $codmarca;
    private $preco;
    private $data_cadastro;
    private $data_atualizacao;
    private $quantidade;
    private $pesounitario;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
        return $this;
    }
}
?>