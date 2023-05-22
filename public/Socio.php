<?php
namespace Socio;
use Persona;

	class Socio extends Persona
    {
        public $Cuota = 0;
        

        public function __construct() {
            $this->cuota = "";
        }
    
        public function __constructParam($cuota) {
            $this->cuota = $cuota;
        }
    
        public function getCuota() {
            return $this->cuota;
        }
    
        public function setCuota($nuevaCuota) {
            $this->cuota = $nuevaCuota;
        }
    }
?>