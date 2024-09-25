<?php
abstract class Vehiculo{

    public $vehiculos = array();

    public function __construct(
        public $kilometrosTotales,
        public $kilometrosRecorridos,
       
    )
    {
    }
    public function añadirVehiculo($vehiculo1){
        array_push($this->vehiculos,$vehiculo1);

    }
    public function getVehiculosCreados(){
        return $this->vehiculos;
    }
    
    public abstract function getKmTotales();

    public abstract function getKmRecorridos();



}


class Bicicleta extends Vehiculo{
    
    public function __construct(
         public $nombre,
         $kilometrosTotales,
         $kilometrosRecorridos
       
    )
    {
        parent::__construct($kilometrosTotales, $kilometrosRecorridos); 
    }

    public function getKmTotales()
    {

        return $this->kilometrosTotales;
        
    }

    public function getKmRecorridos()
    {
        return $this->kilometrosRecorridos;

    }
    public static function andaBicicleta(){
        echo "estoy andando con bicicleta";
    } 
    public static function caballito(){
        echo "estoy haciendo el caballito con la bicicleta";
    }

}
class Coche extends Vehiculo{
    public function __construct(
    public $nombre,
    $kilometrosTotales,
    $kilometrosRecorridos
  
)
{
   parent::__construct($kilometrosTotales, $kilometrosRecorridos); 
}
public function getKmTotales()
{

    return $this->kilometrosTotales;
    
}

public function getKmRecorridos()
{
    return $this->kilometrosRecorridos;

}
public static function andarConCoche(){
    echo "Estoy andando con el coche";
}

public static function quemarRueda(){
    echo "Estoy quemando rueda con el coche";
}


}
$a = new Coche("Opel",3000,4000);
$b = new Bicicleta ("Rockrider",5000,3000);
$a->quemarRueda();
$a->añadirVehiculo($a);
$b->añadirVehiculo($b);
print_r($b->getVehiculosCreados()) ;






?>