<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ferrari
 *
 * @author Rodrigo
 */

class Ferrari extends Carro {
    
    public function __construct($motor, $pneu, $freio, $suspensao) {
        parent::__construct($motor, $pneu, $freio, $suspensao);
    }
    
    public function desligar() {
        parent::getMotor()->desligar();
    }
    
    public function ligar() {
        parent::getMotor()->ligar();
    }
    
    public function freiar($pressao) {
        parent::freiar($pressao);
    }
    
    public function acelerar() {
        parent::acelerar();
    }
    
    public function mostraVelocidade(){
        echo '<br />Velocidade atual: '. parent::getVelocidadeAtual() ;
    }
    
}
