<?php

class Cliente {

    private $nome;
    private $cpf;
    private $profissao;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setProfissao($profissao) {
        $this->profissao = $profissao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getProfissao() {
        return $this->profissao;
    }

    public function __toString() {
        return "Cliente{"
                . "nome: {$this->nome}, "
                . "cpf: {$this->cpf}, "
                . "profissao: {$this->profissao}}";
    }

}
