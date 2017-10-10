<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Oponentes
 *
 * @author Rodrigo
 */
class Oponentes extends FabricaCarros {
      
    public function getOponentes() {
        
          //Pneus do Carro
            $pneus = array();
            $pneu1 = new PneuMacio();
            $pneu1->setCalibragem(30);

            $pneu2 = new PneuMacio();
            $pneu2->setCalibragem(32);

            $pneu3 = new PneuMacio();
            $pneu3->setCalibragem(32);

            $pneu4 = new PneuMacio();
            $pneu4->setCalibragem(30);

            $pneus[] = $pneu1;
            $pneus[] = $pneu2;
            $pneus[] = $pneu3;
            $pneus[] = $pneu4;

            $motor = new MotorTurbo("Motor V8");

            $freio = new FreioABS("Freio ABS");

            $carro = new Ferrari($motor, $pneus, $freio, null);
            $carro->setAno(1996);

            $montadora = new Montadora();
            $montadora->setNome("Woksksk");

            $modelo = new Modelo("Fusca", $montadora);
            
            $carro->setModelo($modelo);
            
            return $carro;
    }
    
    
}
