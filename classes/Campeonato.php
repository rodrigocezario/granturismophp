<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Campeonato
 *
 * @author Rodrigo
 */
class Campeonato {
    
    private $nome;
    private $descricao;
    private $pistas = array();
    private $pilotos = array();
    private $premiacoes = array();
    
    
    function __construct($nome, $descricao, Piloto $pilotos, Pista $pistas) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->pilotos = $pilotos;
        $this->pistas = $pistas;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }
    
    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    function getPistas() {
        return $this->pistas;
    }

    function getPilotos() {
        return $this->pilotos;
    }

    function getPremiacoes() {
        return $this->premiacoes;
    }
    
    function addPremiacao(Premiacao $premiacoes) {
        $this->premiacoes[] = $premiacoes;
    }
    
    function getValorPremio(Pista $pista){
 
        return 0;
    }
    
    
}
