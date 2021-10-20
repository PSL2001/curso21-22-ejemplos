<?php
class Producto{
    private $cod;
    public $nombre;
    protected $pvp;

    public function __construct($c, $n, $p){
        $this->cod=$c;
        $this->nombre=$n;
        $this->pvp=$p;
    }

    public function __toString()
    {
        return "Codigo: {$this->cod}, Nombre: {$this->nombre}, Pvp: {$this->pvp}";
    }

    /**
     * Get the value of cod
     */ 
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set the value of cod
     *
     * @return  self
     */ 
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * Get the value of pvp
     */ 
    public function getPvp()
    {
        return $this->pvp;
    }

    /**
     * Set the value of pvp
     *
     * @return  self
     */ 
    public function setPvp($pvp)
    {
        $this->pvp = $pvp;

        return $this;
    }
}