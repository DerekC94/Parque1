<?php
namespace Fauna;


	class Fauna
	{
		public $Especie = '';
		public $Zona = 0;
		public $Origen = '';
		public $Genero = '';
		
		
		public function __construct()
    	{
           	
    	}
    

        public function getEspecie() {
			return $this->especie;
		}
	
		public function setEspecie($nuevaEspecie) {
			$this->especie = $nuevaEspecie;
		}
	
		public function getZona() {
			return $this->zona;
		}
	
		public function setZona($nuevaZona) {
			$this->zona = $nuevaZona;
		}
	
		public function getGenero() {
			return $this->genero;
		}
	
		public function setGenero($nuevaGenero) {
			$this->genero = $nuevaGenero;
		}
	
		public function getOrigen() {
			return $this->origen;
		}
	
		public function setOrigen($nuevaOrigen) {
			$this->origen = $nuevaOrigen;
		}
    }

?>