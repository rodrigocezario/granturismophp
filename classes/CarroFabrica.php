<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarroFabrica
 * Concrete builders (adicionei o padrão factory method)
 *
 * @author Rodrigo
 */
class CarroFabrica implements ICarroBuilder {

    private $freio;
    private $motor;
    private $pneus = array();
    private $modelo;
    private $suspensao;
    private $montadora;

    //Implementei factory method aqui
    public function build($carro) {
        return new CarroDiretor($this, $carro);
    }

    public function setFreio($tipo) {
        $obj = "Freio" . $tipo;
        if (class_exists($obj)) {
            $this->freio = new $obj("Freio " . $tipo);
            return $this;
        } else {
            throw new Exception("Tipo inválido de freio!");
        }
    }
    
    public function setMontadora($montadora){
        $mont = new Montadora();
        $mont->setNome($montadora);
        $this->montadora = $mont;
        return $this;
    }

    public function setModelo($modelo) {
        $mod = new Modelo($modelo, $this->montadora);
        $this->modelo = $mod;
        return $this;
    }

    public function setMotor($tipo) {
        $obj = "Motor" . $tipo;
        if (class_exists($obj)) {
            $this->motor = new $obj("Motor " . $tipo);
            return $this;
        } else {
            throw new Exception("Tipo inválido de motor!");
        }
    }

    public function setPneus($tipo, $quantidade) {
        $obj = "Pneu" . $tipo;
        if (class_exists($obj)) {
            $pneus = array();
            for ($i = 0; $i < $quantidade; $i++) {
                $pneus[$i] = new $obj();
                $pneus[$i]->setCalibragem(mt_rand(26, 38)); //randomizado entre 26 e 38
                $this->pneus[] = $pneus[$i];
            }
            return $this;
        } else {
            throw new Exception("Tipo inválido de pneu!");
        }
    }

    public function setSuspensao($tipo) {
        $obj = "Suspensao" . $tipo;
        if (class_exists($obj)) {
            $this->suspensao = new $obj();
            return $this;
        } else {
            throw new Exception("Tipo inválido de suspensão!");
        }
    }

    function getFreio() {
        return $this->freio;
    }

    function getMontadora() {
        return $this->montadora;
    }

    function getMotor() {
        return $this->motor;
    }

    function getPneus() {
        return $this->pneus;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getSuspensao() {
        return $this->suspensao;
    }

}
