<?php
namespace Persona;

class Persona
{
    public $Nombre = '';
    public $Nacionalidad = '';
    public $Genero = '';
    
    public function __construct()
    {
        
    }
    
    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setNombre($nuevaNombre)
    {
        $this->Nombre = $nuevaNombre;
    }

    public function getGenero()
    {
        return $this->Genero;
    }

    public function setGenero($nuevaGenero)
    {
        $this->Genero = $nuevaGenero;
    }

    public function getNacionalidad()
    {
        return $this->Nacionalidad;
    }

    public function setNacionalidad($nuevaNacionalidad)
    {
        $this->Nacionalidad = $nuevaNacionalidad;
    }
}
?>
