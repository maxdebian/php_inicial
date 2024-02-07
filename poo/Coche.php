<?php 
    class Coche {
    
        // Propiedades | atributos
        private $color = 'Verde';
        private $potencia;
        public $marca;




        // metodos   |   funciones

        public function __construct($color,$potencia,$marca)
        {
            if(!is_null($color))
                $this->color = $color;
            $this->potencia = $potencia;
            $this->marca = $marca;
        }



        public function getColor(){
            return $this->color;
        }

        public function setColor($colorRecivido){
            $this->color = $colorRecivido;
        }
        public function getPotencia(){
            return $this->potencia;
        }

        public function setPotencia($potenciaRecivido){
            if(!is_numeric($potenciaRecivido)) exit ("<br>La potencia debe ser numerica ".$potenciaRecivido);

            $this->potencia = $potenciaRecivido;
        }

        public function controlarPotencia($unCoche){
            /* if($unCoche->potencia > $this->potencia){
                return $unCoche->marca.' Es mayor';
            }else{
                return $this->marca.' Es mayor';
            } */
            return $unCoche->potencia > $this->potencia ? $unCoche->marca.' Es mayor' : $this->marca.' Es mayor';
            
        }

    }


?>