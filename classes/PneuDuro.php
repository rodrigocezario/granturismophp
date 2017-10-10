<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PneuDuro
 *
 * @author Rodrigo
 */
class PneuDuro implements IPneu {

    private $calibragem;
    const TIPO = "Duro";

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
