<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Garagem
 *
 * @author Rodrigo
 */

class Garagem {

    private $piloto;
    private $carros = array();

    public function __construct(Piloto $piloto) {
        $this->piloto = $piloto;
    }

    public function adicionarCarro(Carro $carro) {
        $this->carros[] = $carro;
    }

    public function removerCarro(Carro $carro) {
        if (($key = array_search($carro, $this->carros[])) !== false) {
            unset($this->carros[$key]);
        }
    }

    function getPiloto() {
        return $this->piloto;
    }

    function getCarros() {
        return $this->carros;
    }

}
