<?php

class Marca{
    private $codigo;
    private $descricao;
    private $datacadastro;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
        return $this;
    }

}

?>