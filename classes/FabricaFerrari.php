<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FabricaFerrari
 *
 * @author Rodrigo
 */
class FabricaFerrari extends FabricaCarros {
    
    public function getOponentes() {
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


            $motor = new MotorTurbo("Super motor");

            $freio = new FreioABS("Freio ABS");

            $carro = new Ferrari($motor, $pneus, $freio, null);
            $carro->setAno(1996);

            $montadora = new Montadora();
            $montadora->setNome("Ferrari");

            $modelo = new Modelo("Testarossa", $montadora);

            $carro->setModelo($modelo);
            
            return $carro;
    }
    
}
