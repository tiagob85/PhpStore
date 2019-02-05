<?php

class Secao{
    private $codigo;
    private $descricao;
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