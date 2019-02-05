<?php

class Fornecedor{
    private $codigo;
    private $nome;
    private $razaosocial;
    private $endereco;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    private $telresidencial;
    private $telcelular;
    private $cnpj;
    private $nomerepresentante;
    private $observacao;
    private $email;
    private $data_cadastro;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
        return $this;
    }

}

?>