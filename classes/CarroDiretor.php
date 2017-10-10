<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarroDiretor
 * Diretor
 * O diretor somente vai orquestrar a ordem de construção
 *
 * @author Rodrigo
 */
class CarroDiretor implements IDiretorCarro {
    
    private $carro;
    public function __construct(ICarroBuilder $builder, $nomeCarro) { 
        //Cria o tipo de carro necessário e vai adicionando (montando) as partes
        $this->carro = new $nomeCarro($builder->getMotor(), 
                $builder->getPneus(), 
                $builder->getFreio(), 
                $builder->getSuspensao()); 
        $builder->setMontadora($builder->getMontadora());
        $this->carro->setModelo($builder->getModelo());
       
        return $this->carro;
    }
    
    public function getCarro(){
        return $this->carro;
    }

}
