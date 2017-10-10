<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pista
 *
 * @author Rodrigo
 */
class Pista {

    private $nome;
    private $distancia; //distância em metros
    private $curvas; //qt de curvas
    private $tempo; //melhor tempo da pista
    private $clima; //condição climática Classe Tempo
    private $terreno; //terreno da Pista (cascalho, asfalto e etc)

    public function __construct($nome, $distancia, $curvas, $tempo,
            Tempo $clima, Terreno $terreno) {
        $this->nome = $nome;
        $this->distancia = $distancia;
        $this->curvas = $curvas;
        $this->tempo = $tempo;
        $this->clima = $clima;
        $this->terreno = $terreno;
    }

    function getDistancia() {
        return $this->distancia;
    }

    function getCurvas() {
        return $this->curvas;
    }

    function getTempo() {
        return $this->tempo;
    }

    function getTerreno() {
        return $this->terreno;
    }

    function getNome() {
        return $this->nome;
    }

}
