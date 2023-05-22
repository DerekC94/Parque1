<?php
namespace Animal;
use Fauna;

	class Animal extends Fauna
    {
        public $Peligro = 0;
        public $Salvaje = FALSE;
        public $Nombre = '';

    

    public function __construct()
    	{
           	
    	}

        public function getNombre() {
            return $this->nombre;
        }
    
        public function setNombre($nuevaNombre) {
            $this->nombre = $nuevaNombre;
        }
    
        public function getPeligro() {
            return $this->peligro;
        }
    
        public function setPeligro($nuevaPeligro) {
            $this->peligro = $nuevaPeligro;
        }
    
        public function getSalvaje() {
            return $this->salvaje;
        }
    
        public function setSalvaje($nuevaSalvaje) {
            $this->salvaje = $nuevaSalvaje;
        }
    }

?>