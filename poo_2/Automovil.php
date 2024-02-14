<?php
    class Automovil {

        public $color;
        private $marca;
        protected $x;
        const NUMERACION = 100;

        public static function calculo($numberOne,$numberTwo){
            $result = $numberOne+$numberTwo;
            echo 'Result: '.$result;
        }


        public function mostrarColorMarca(/* $variableMarca */){
            /* echo $this->color.' Marca: '.$this->marca ; */
            /* echo 'Color: '.$this->color.' Marca: '.$this->mostrarMarca($variableMarca) ; */
            echo 'Color: '.$this->color.' Marca: '.$this->mostrarMarca().'<br>' ; 
        }

        public function mostrarMarca(/* $variableMarca */){
            /* return $this->marca = $variableMarca; */
            return $this->marca;
        }

        public function setMarca($variableMarca){
            $this->marca = $variableMarca;
        }

       /*  public function getMarca(){
            return $this->marca;
        } */

        public function getContent(Object $object){
            echo '<br> Color: '.$object->color.' Marca: '.$object->mostrarMarca().' Rueda: '.$object->getRueda();
        }

    }

    class Camion extends Automovil {
        private $cantidadDeRuedas;

        public function setCantidadDeRuedas($cantidad){
            $this->cantidadDeRuedas = $cantidad;
        }

        public function mostrarCamion(){
            echo '<br>'.$this->mostrarColorMarca().'<br> Cantidad de Ruedas: '.$this->cantidadDeRuedas;
        }

        public function mostrarObjeto(Camion $objeto){
            echo '<br> Color: '.$objeto->color.'  marca: '.$objeto->mostrarMarca().' ruedas: '.$objeto->getRueda();
        }

        public function getRueda(){
            return $this->cantidadDeRuedas;
        }

    }

    class Moto extends Automovil {
        private $cantidadDeRuedas;

        public function setCantidadDeRuedas($cantidad){
            $this->cantidadDeRuedas = $cantidad;
        }

        public function mostrarMoto(){
            echo '<br>'.$this->mostrarColorMarca().'<br> Cantidad de Ruedas: '.$this->cantidadDeRuedas;
        }

        public function getRueda(){
            return $this->cantidadDeRuedas;
        }

    }

/*     final class Automovil2 {
        public function getColor(){
            echo 'Amarillo';
        }
    }

    class Automovil3 extends Automovil2{

    } */