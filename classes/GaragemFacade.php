<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GaragemFacade
 *
 * @author Rodrigo
 */
class GaragemFacade {
   
    private $garagem; //não é facade, torna-se mediator
    
    public function __construct(Garagem $garagem) {
        $this->garagem = $garagem;
    }
    
    public function adicionarCarro(Carro $carro){
        $this->garagem->adicionarCarro($carro);
    }
    
    //por não haver preço no carro, adicionamos aqui no facade o preço de venda
    //Sugestão do Taciano
    public function venderCarro(Carro $carro, $preco){
        $this->garagem->getPiloto()->evoluir(0, $preco);
        //removerCarro
    }
    
    public function listarCarros(){
        //return ;
    }
    
    
}
