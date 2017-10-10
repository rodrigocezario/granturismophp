<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FreioConvencional
 *
 * @author Rodrigo
 */
class FreioConvencional implements IFreio {

    private $descricao;

    public function __construct($descricao) {
        $this->descricao = $descricao;
    }

    public function acionar($velocidadeAtual, $pressao) {
        $velocidade = 0;
        echo '<br />Acionando o freio convencional...';
        if ($velocidadeAtual > 0) {
            $velocidade -= 1;
            return $velocidade;
        } else {
            return 0;
        }
    }

    function getDescricao() {
        return $this->descricao;
    }

}
