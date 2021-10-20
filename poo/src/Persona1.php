<?php
class Persona1
{
    public static $contador=0;
    private static $contador1;
    public $nombre;
    protected $puesto;
    private $dni;
    private $username;
    private $mail;

    public function __construct() //$n, $p, $d
    {
        $numero = func_num_args();
        
        self::$contador++;
        echo "Hemos instanciado ".Persona1::$contador." objetos de la clase Persona1";

        switch ($numero) {
            case 3:
                $this->nombre = func_get_arg(0);
                $this->puesto = func_get_arg(1);
                $this->dni = func_get_arg(2);
                break;
            case 1: //suponemos que solo llega dni
                $this->dni=func_get_arg(0);
                break;
        }
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
        return "Nombre: " . $this->nombre . ", Puesto: " . $this->puesto .
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

    /**
     * Get the value of contador1
     */ 
    public static function getContador1()
    {
        return self::$contador1;
    }

    /**
     * Set the value of cecho $persona1->mail;ontador1
     *
     * @return  self
     */ 
    public static function setContador1($contador1)
    {
        self::$contador1 = $contador1;

    }

    //getter y setter (métodos mágicos)
    
    public function __get($atributo){
       // echo "<br>Intento de lectura no autorizado del atributo: <b>$atributo</b> Privado !!!!!";
    }
    
    public function __set($atributo, $valor){
       // echo "<br>Intento de escritura no autorizado del atributo: <b>$atributo</b> Privado !!!!!";
       // echo "Se le esta intentando asignar el valor: $valor";
    }
    
    
}
