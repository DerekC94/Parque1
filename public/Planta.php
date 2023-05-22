<?php
namespace Planta;
use Flora;

	class Planta extends Flora
    {
        public $Peligro = 0;
        public $Nombre = '';
        public $Tipo = '';

        public function __construct()
    	{
           	
    	}

        public function getNombre()
        {
            return $this->nombre;
        }
    
        public function setNombre($nuevaNombre)
        {
            $this->nombre = $nuevaNombre;
        }
    
        public function getPeligro()
        {
            return $this->peligro;
        }
    
        public function setPeligro($nuevaPeligro)
        {
            $this->peligro = $nuevaPeligro;
        }
    
        public function getTipo()
        {
            return $this->tipo;
        }
    
        public function setTipo($nuevaTipo)
        {
            $this->tipo = $nuevaTipo;
        }
    }

?>
