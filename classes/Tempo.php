<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tempo (ensolarado, chuvo, nevando)
 * Esta classe corresponde as condições climáticas exercidas na pista
 *
 * @author Rodrigo
 */
class Tempo {

    private $descricao;

    public function __construct($descricao) {
        $this->descricao = $descricao;
    }

    function getDescricao() {
        return $this->descricao;
    }

}
