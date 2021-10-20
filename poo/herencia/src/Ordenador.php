<?php
class Ordenador extends Producto implements Interfaz1{
    public $cpu;
    public $sistema;

    public function __construct($c, $n, $p, $cpu, $sistema)
    {
        parent::__construct($c, $n, $p);
        $this->cpu=$cpu;
        $this->sistema=$sistema;
    }

    public function __toString()
    {
        return parent::__toString()." CPU={$this->cpu}, Sistema={$this->sistema}";
    }

    public function muestra()
    {
        echo "<br>El nombre del producto es: ".$this->nombre."<br>";
        echo "<br>El precio del producto es: ".$this->pvp."<br>";
        echo "<br>El codigo del producto es: ".$this->getCod()."<br>";   
    }
    public function calculaDescuento($d)
    {
        $this->pvp=(1-$d/100)*$this->pvp;
    }
    

}