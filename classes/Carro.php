<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carro
 *
 * @author Rodrigo
 */
//require_once 'IPneu.php';
//require_once 'IMotor.php';

abstract class Carro {

    protected $motor;
    private $freio;
    private $nitroxido;
    private $nitroxidoQt;
    private $ano;
    private $modelo;
    private $suspensao;
    private $pneus = array();
    private $velocidadeAtual;

    public function __construct(IMotor $motor, $pneu, IFreio $freio, ISuspensao $suspensao) {
        $this->motor = $motor;
        $this->pneus = $pneu;
        $this->freio = $freio;
        $this->suspensao = $suspensao;
    }

    function getModelo() {
        return $this->modelo;
    }

    function setModelo(Modelo $modelo) {
        $this->modelo = $modelo;
    }

    protected function acelerar() {
        if ($this->motor->getStatus()) { //se estiver ligado...
            if ($this->motor->getPotencia() > 150) { //motores potentes
                $this->velocidadeAtual += 2;
            } else {
                $this->velocidadeAtual += 1;
            }
            echo '<br />Acelerrando....';
        } else {
            echo '<br />Veículo desligado, para andar tem que ligá-lo primeiro...';
        }
    }

    public function freiar($pressao) {
        $this->velocidadeAtual = $this->freio->acionar($this->velocidadeAtual, $pressao);
    }

    function getMotor() {
        return $this->motor;
    }

    function setMotor(IMotor $motor) {
        $this->motor = $motor;
    }

    function getPneus() {
        return $this->pneus;
    }

    function setPneus(IPneu $pneus) {
        $this->pneus = $pneus;
    }
    
    function getFreio() {
        return $this->freio;
    }

    function getNitroxido() {
        return $this->nitroxido;
    }

    function getNitroxidoQt() {
        return $this->nitroxidoQt;
    }

    function getAno() {
        return $this->ano;
    }

    function getSuspensao() {
        return $this->suspensao;
    }

    function setNitroxido($nitroxido) {
        $this->nitroxido = $nitroxido;
    }

    function setNitroxidoQt($nitroxidoQt) {
        $this->nitroxidoQt = $nitroxidoQt;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }
    
    function setSuspensao($suspensao){
       $this->suspensao = $suspensao; 
    }
    
    function getVelocidadeAtual() {
        return $this->velocidadeAtual;
    }

    abstract function ligar();

    abstract function desligar();
}
