<?php


class Pessoa {
    
    public $nome;
    public $sexo;
    public $cidade;
    
   
    
    function __construct() {
       
    }

        function getNome() {
        return $this->nome;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }


}
