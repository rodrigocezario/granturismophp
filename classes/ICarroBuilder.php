<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Rodrigo
 */
interface ICarroBuilder {
    function build($carro);
    function getMotor();
    function getMontadora();
    function getFreio();
    function getPneus();
    function getModelo();
    function getSuspensao();
    function setMontadora($montadora);
}
