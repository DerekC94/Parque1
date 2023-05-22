<?php
use Persona;
use Fauna;
use Flora;

        require('Persona.php');

        $persona_1 = new Persona();
        $persona_2 = new Persona();

        $persona_1->setNombre('Derek C.');
        $persona_1->setNacionalidad('Español');
        $persona_1->setPuesto('Cuidador');
        $persona_1->setZona('Zona Caninos');

        $persona_2->setNombre('Aiden');
        $persona_2->setGenero('Varón');
        $persona_2->setCuota('100€');


        require('Fauna.php');
        $animal_1 = new Animal();
        $animal_1->setEspecie('Lobo');
        $animal_1->setNombre('Balto');
        $animal_1->setGenero('Macho');
        $animal_1->setPeligro(9);

        $animal_2 = new Animal();
        $animal_2->setEspecie('Tigre');
        $animal_2->setSalvaje(TRUE);
        $animal_2->setNombre('Shere-Khan');


        require('Flora.php');
        $planta_1 = new Planta();
        $planta_1->setNombre('Orquídea');
        $planta_1->setZona('Zona cálida');
        $planta_1->setTierra('Húmeda, rica en zinc');
        
        $planta_2 = new Planta();
        $planta_2->setNombre('Bananero');
        $planta_2->setFrutal(TRUE);
        $planta_2->setOrigen('Islas Canarias');


        echo 'La persona: '.$persona_1->getNombre().' es ' .$persona_1->getPuesto(). ' de '.$persona_1->getZona();
        echo 'El animal ' .$animal_1->getNombre(). ' de especie '.$animal_1->getEspecie(). 'es cuidado por '.$persona_1().' y el socio '.$persona_2->getNombre().'paga '.$persona_2->getCuota(). 'para ayudar a cuidarlo.';


    

?>