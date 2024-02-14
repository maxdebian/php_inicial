<?php 

    class Automovil {
        public function getMarca(){
            echo "Renault";
        }
    }
    trait Modelo{
        public function getModelo(){
            echo "2024";
        }
    }

    class Ventas extends Automovil{
        use Modelo;


        public function getAll(Array $cars){
            foreach ($cars as $car) {
                echo $car.'<br>';
            }
        }
    }

?>