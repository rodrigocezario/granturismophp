<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Premiacao
 *
 * @author Rodrigo
 */
class Premiacao {
    
    private $pista;
    private $valorPremio;
    
    public function __construct(Pista $pista, $valorPremio) {
        $this->pista = $pista;
        $this->valorPremio = $valorPremio;
    }
    
    function getPista() {
        return $this->pista;
    }
    
    function getValorPremio() {
        return $this->valorPremio;
    }
    
}
