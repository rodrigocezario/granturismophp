<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FreioABS
 * Implementação do sistema de freio ABS
 *
 * @author Rodrigo
 */
class FreioABS implements IFreio {

    private $descricao;

    public function __construct($descricao) {
        $this->descricao = $descricao;
    }

    public function acionar($velocidadeAtual, $pressao) {
        $velocidade = 0;
        echo '<br />Acionando o freio ABS...';
        if ($velocidadeAtual > 0) {
            switch ($pressao) {
                case 1:
                    $velocidade = $velocidadeAtual - $pressao;
                    break;
                case 2:
                    $velocidade = $velocidadeAtual - $pressao;
                    break;
                case 3:
                    $velocidade = $velocidadeAtual - $pressao;
                    break;
                default:
                    $velocidade = $velocidadeAtual - 3;
                    break;
            }
            return $velocidade;
        } else {
            return 0;
        }
    }

    function getDescricao() {
        return $this->descricao;
    }

}
