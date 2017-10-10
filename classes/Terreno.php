<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Terreno
 * Descrição do Terreno (cascalho, asfalto, neve)
 *
 * @author Rodrigo
 */
class Terreno {
    private $descricao;
    
    public function __construct($descricao) {
        $this->descricao = $descricao;
    }
    
    function getDescricao() {
        return $this->descricao;
    }

}
