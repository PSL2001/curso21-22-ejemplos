<?php
    class Persona{
         public $nombre;
         protected $puesto;
         private $dni;

         public function __construct($n, $p, $d)
         {
              
          $this->nombre=$n;
              $this->puesto=$p;
              $this->dni=$d;
         }
         


         /**
          * Get the value of dni
          */ 
         public function getDni()
         {
                  return $this->dni;
         }

         /**
          * Set the value of dni
          *
          * @return  self
          */ 
         public function setDni($dni)
         {
                  $this->dni = $dni;

                  return $this;
         }

         public function __toString()
         {
              return "Nombre: ".$this->nombre.", Puesto: ".$this->puesto.
              ", Dni: {$this->dni}";

         }

         /**
          * Get the value of puesto
          */ 
         public function getPuesto()
         {
                  return $this->puesto;
         }

         /**
          * Set the value of puesto
          *
          * @return  self
          */ 
         public function setPuesto($puesto)
         {
                  $this->puesto = $puesto;

                  return $this;
         }
    }