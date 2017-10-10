<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MotorMil
 *
 * @author Rodrigo
 */
class MotorMil implements IMotor {

    private $descricao;
    private $status = false;
    const POTENCIA = 58;

    public function __construct($descricao) {
        $this->descricao = $descricao;
    }

    public function desligar() {
        if ($this->getStatus()) {
            $this->status = false;
            echo '<br />Deligando o motor...';
        } else {
            echo '<br />Motor já está desligado...';
        }
    }

    public function ligar() {
        if ($this->getStatus()) {
            echo '<br />Motor já está ligado...';
        } else {
            $this->status = true;
            echo '<br />Ligando o motor...';
        }
    }

    function getStatus() {
        return $this->status;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPotencia() {
        return self::POTENCIA;
    }

}
