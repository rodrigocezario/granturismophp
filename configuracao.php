<?php

function __autoload($classe) {
    include_once "classes/{$classe}.php";
}


//Opcoes para randomizar
//ainda não está legal desta forma essa parametrização...
$tipoFreios = array("ABS", "Convencional");
$tipoPneus = array("Macio", "Duro");
$tipoSuspensao = array("Independente", "MacPherson");
$tipoMotor = array("Turbo", "Mil");
$tipoCarros = array("CarFerrari", "CarFusca", "CarKombi");

function aleatorio($vetor){
    //echo '<br /> '. $vetor[mt_rand(0, sizeof($vetor) - 1)];
    return $vetor[mt_rand(0, sizeof($vetor) - 1)];
}


/**
 * Class casting
 *
 * @param string|object $destination
 * @param object $sourceObject
 * @return object
 */
function cast($destination, $sourceObject)
{
    if (is_string($destination)) {
        $destination = new $destination();
    }
    $sourceReflection = new ReflectionObject($sourceObject);
    $destinationReflection = new ReflectionObject($destination);
    $sourceProperties = $sourceReflection->getProperties();
    foreach ($sourceProperties as $sourceProperty) {
        $sourceProperty->setAccessible(true);
        $name = $sourceProperty->getName();
        $value = $sourceProperty->getValue($sourceObject);
        if ($destinationReflection->hasProperty($name)) {
            $propDest = $destinationReflection->getProperty($name);
            $propDest->setAccessible(true);
            $propDest->setValue($destination,$value);
        } else {
            $destination->$name = $value;
        }
    }
    return $destination;
}
