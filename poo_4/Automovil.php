<?php
    class Automovil {

        public $color;
        private $marca;
       
        public function __construct($color/* ,$marca */)
        {   
            $this->color = $color;
            /* $this->marca = $marca; */
        }

        public function getAll(){
            echo $this->color.'  Marca  '.$this->getMarca();
        }
        public function setMarca($variableMarca){
            $this->marca = $variableMarca;
        }
        public function getMarca(){
            return $this->marca;
        }

    }

    class Camion extends Automovil {
       public $ruedas;

       public function __construct($color,$ruedas)
       {
            parent::__construct($color);
            $this->ruedas = $ruedas;
       }
    }

?>