<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
          require_once './classes/Carro.php';
          require_once './classes/Ferrari.php';
          require_once './classes/MotorTurbo.php';
          require_once './classes/PneuMarcio.php';
         */

        require_once 'configuracao.php';

        try {

            /*
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


              $motor = new MotorTurbo("Super motor");

              $freio = new FreioABS("Freio ABS");

              $carro = new Ferrari($motor, $pneus, $freio, null);
              $carro->setAno(1996);

              $montadora = new Montadora();
              $montadora->setNome("Ferrari");

              $modelo = new Modelo("Testarossa", $montadora);

              $carro->setModelo($modelo);
              $carro->ligar();

              $carro->acelerar();
              $carro->acelerar();
              $carro->acelerar();
              $carro->mostraVelocidade();

              $carro->freiar(2);
              $carro->mostraVelocidade();
              $carro->acelerar();
              $carro->acelerar();
              $carro->freiar(1);
              $carro->acelerar();
              $carro->desligar();
              $carro->acelerar();
              $carro->mostraVelocidade();

              carroDetalhe($carro);


              //cliente utilizando a nossa fábrica
              //$fabrica = new Oponentes();
              //$fusca1 = $fabrica->getOponentes();
              //carroDetalhe($fusca1);
              //$fusca2 = $fabrica->getOponentes();
              //carroDetalhe($fusca2);
              //mostra o hash code do objeto
              echo '<br />ID do fusca1: ' . spl_object_hash($fusca1);
              echo '<br />ID do fusca2: ' . spl_object_hash($fusca2);
             */


            //no meu cliente
            /*
              function adicionaCarro(FabricaCarros $fabrica){
              $carroNovo = $fabrica->getOponentes();
              return $carroNovo;
              }
             */
            //$fabricaFerrari = new FabricaFerrari;
            //$fabricaFusca = new FabricaFusca;
            //lista de carros
            $carros = array();


            $carroBuilder1 = new CarroFabrica();
            $carroBuilder1->setFreio(aleatorio($tipoFreios))
                    ->setMotor(aleatorio($tipoMotor))
                    ->setPneus(aleatorio($tipoPneus), 4)
                    ->setFreio(aleatorio($tipoFreios))
                    ->setSuspensao(aleatorio($tipoSuspensao))
                    ->setMontadora("Chevrolet")
                    ->setModelo("Cruze");

            $carro1 = $carroBuilder1->build(aleatorio($tipoCarros));

            $carroBuilder2 = new CarroFabrica();
            $carroBuilder2->setFreio(aleatorio($tipoFreios))
                    ->setMotor(aleatorio($tipoMotor))
                    ->setPneus(aleatorio($tipoPneus), 4)
                    ->setFreio(aleatorio($tipoFreios))
                    ->setSuspensao(aleatorio($tipoSuspensao))
                    ->setMontadora("Wolksvagem")
                    ->setModelo("Kombi");

            $carro2 = $carroBuilder2->build(aleatorio($tipoCarros));

            $carroBuilder3 = new CarroFabrica();
            $carroBuilder3->setFreio(aleatorio($tipoFreios))
                    ->setMotor(aleatorio($tipoMotor))
                    ->setPneus(aleatorio($tipoPneus), 4)
                    ->setFreio(aleatorio($tipoFreios))
                    ->setSuspensao(aleatorio($tipoSuspensao))
                    ->setMontadora("Wolksvagem")
                    ->setModelo("Fusca");
            
            $carro3 = $carroBuilder3->build(aleatorio($tipoCarros));


            $carros[] = $carro1;
            $carros[] = $carro2;
            $carros[] = $carro3;
            
            /*
                echo '<br />Carro 1: ';
                var_dump($carro1);
                echo '<br />Carro 2: ';
                var_dump($carro2);
                echo '<br />Carro 3: ';
                var_dump($carro3);
            */
            
            foreach ($carros as $key => $value) {
                carroDetalhe($value->getCarro()); 
            }

            //Pista 1
            $tempo = new Tempo("Ensolarado");
            $terreno = new Terreno("Asfalto novo");
            $pista = new Pista("Silverstone Circuit", 1200, 7, 500, $tempo, $terreno);
            
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        function carroDetalhe(Carro $carro) {
            echo '<br /><br /> ======= Detalhes do Carro ========= <br />';
            echo '<br />Modelo: ' . $carro->getModelo()->getNome();
            echo '<br />Ano: ' . $carro->getAno();
            echo '<br />Montadora: ' . $carro->getModelo()->getMontadora()->getNome();
            echo '<br />Motor: ' . $carro->getMotor()->getDescricao() . " - " . $carro->getMotor()->getPotencia();
            echo '<br />Freios: ' . $carro->getFreio()->getDescricao();
            echo '<br />Pneus: ' . $carro->getPneus()[0]->getTipo();
            echo '<br />====================================';
        }
        ?>
    </body>
</html>
