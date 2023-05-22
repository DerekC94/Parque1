<?php
namespace Flora;

	class Flora
	{
		public $Altura = 0;
		public $Frutal = FALSE;
		public $Zona = '';
		public $Origen = '';
		public $Tierra = '';
		
		
		public function __construct()
    	{
           	
    	}


        public function getAltura()
        {
            return $this->altura;
        }
    
        public function setAltura($nuevaAltura)
        {
            $this->altura = $nuevaAltura;
        }
    
        public function getFrutal()
        {
            return $this->frutal;
        }
    
        public function setFrutal($nuevaFrutal)
        {
            $this->frutal = $nuevaFrutal;
        }
    
        public function getZona()
        {
            return $this->zona;
        }
    
        public function setZona($nuevaZona)
        {
            $this->zona = $nuevaZona;
        }
    
        public function getOrigen()
        {
            return $this->origen;
        }
    
        public function setOrigen($nuevaOrigen)
        {
            $this->origen = $nuevaOrigen;
        }
    
        public function getTierra()
        {
            return $this->tierra;
        }
    
        public function setTierra($nuevaTierra)
        {
            $this->tierra = $nuevaTierra;
        }
    }

?>