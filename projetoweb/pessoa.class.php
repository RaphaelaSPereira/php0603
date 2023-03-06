<?php

//Classe
class Pessoa{
    //Atributos
    private $nome;
    private $endereço;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //Método GET
    public function getNome(){
        return $this->nome;
    }

    public function getEndereço(){
        return $this->endereço;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function getCep(){
        return $this->cep;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function getEstado(){
        return $this->estado;
    }
}

?>