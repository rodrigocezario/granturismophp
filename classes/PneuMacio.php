<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PneuMacio
 *
 * @author Rodrigo
 */

class PneuMacio implements IPneu {
    private $calibragem;
    const TIPO = "Macio";
    
    public function getTipo() {
        return self::TIPO;
    }
     
    public function getCalibragem() {
        return $this->calibragem;
    }
    
    public function setCalibragem($valor) {
        $this->calibragem = $valor;
    }
    
}
