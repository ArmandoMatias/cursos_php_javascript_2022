<?php

class Vehiculo{
    public $numero_de_llantas;
    private $kilometraje;

    public function _construct(){
        $this->inicializarkilometraje();
    }


    public function getkilometraje(){
        return $this->kilometraje;
    }

    private function inicializarkilometraje(){
        $this->kilometraje = 0;
    }

    protected function setkilometraje($km){
        $this->kilometraje= $this->kilometraje + $km;
        return $this->kilometraje;

    }

}


$auto = new Vehiculo();
$auto->numero_de_llantas = 4;
echo 'Numero de llantas: '.$auto->numero_de_llantas;
echo '<br/>';
echo 'El kilometraje es: '.$auto->getkilometraje().' km';

class Auto extends Vehiculo{
    public $marca = 'N/A';
    public $anio = 'N/A';
    public $color = 'N/A';

    function setPropiedades($marcaRe='N/A',$colorRe,$anioRe='2022'){
        $this->marca = $marcaRe;
        $this->color = $colorRe;
        $this->anio = $anioRe;

    }

    function avanzar($km){
        return $this->setkilometraje($km);
    }

}

    echo '<br/>----------------<br/>';
    $bocho = new Auto();
    $bocho-> setpropiedades('Vw','rojo',2020);
    $bocho->numero_de_llantas = 4;
    echo '<br/>';
    echo 'Numero de llantas: '.$bocho->numero_de_llantas;
    echo '<br/>';
    echo 'Marca: '.$bocho->marca.'<br/>';
    echo 'Color: '.$bocho->color.'<br/>';
    echo 'Año: '.$bocho->anio.'<br/>';
    echo 'km actual: '.$bocho->getkilometraje().'<br/>';
    $bocho->avanzar(50);
    echo 'km actual: '.$bocho->getkilometraje().'<br/>';
    $bocho->avanzar(20);
    echo 'km actual: '.$bocho->getkilometraje().'<br/>';

?>