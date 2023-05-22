<?php
namespace Trabajador; 
use Persona;

	class Trabajador extends Persona
    {
        
		public $Puesto = '';
		public $Zona = '';
		private $Salario = 0;
		

        public function __construct()
    	{
           	
    	}
        
            public function getPuesto() {
                return $this->puesto;
            }
        
            public function setPuesto($nuevaPuesto) {
                $this->puesto = $nuevaPuesto;
            }
        
            public function getZona() {
                return $this->zona;
            }
        
            public function setZona($nuevaZona) {
                $this->zona = $nuevaZona;
            }
        
            public function getSalario() {
                return $this->salario;
            }
        
            public function setSalario($nuevaSalario) {
                $this->salario = $nuevaSalario;
            }
        
    }
?>