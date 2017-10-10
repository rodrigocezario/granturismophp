<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Modelo
 *
 * @author Rodrigo
 */
class Modelo {
    private $nome;
    private $montadora;
    
    public function __construct($nome, Montadora $montadora) {
        $this->nome = $nome;
        $this->montadora = $montadora;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getMontadora() {
        return $this->montadora;
    }
    
}
