<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Piloto
 *
 * @author Rodrigo
 */
class Piloto {
    private $nome;
    private $experiencia;
    private $dinheiro;
    private $garagem;
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    function setGaragem(Garagem $garagem){
        $this->garagem = $garagem;  
    }
        
    function getNome() {
        return $this->nome;
    }

    function getExperiencia() {
        return $this->experiencia;
    }

    function getDinheiro() {
        return $this->dinheiro;
    }

    function getGaragem() {
        return $this->garagem;
    }
    
    public function evoluir($xp, $kk){
        $this->experiencia += $xp;
         $this->dinheiro += $kk;
    }

}
