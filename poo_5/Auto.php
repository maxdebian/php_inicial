<?php

    class Auto{
        private $color;
        private $modelo;
        private $marca;
        private $id;

        public function __construct($color, $modelo, $marca)
        {
            $this->color = $color;
            $this->modelo = $modelo;
            $this->marca = $marca;
        }


        public function getColor(){
            return $this->color;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getModelo(){
            return $this->modelo;
        }

        public function setColor($color){
            $this->color = $color;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function setId($id){
            $this->id = $id;
        }
    }


    class PdoConection{
        private $serverName, $userName, $password, $DBMS, $dbName, $conection;

        public function __construct($serverName,$userName,$password,$DBMS,$dbName)
        {
            $this->serverName = $serverName;
            $this->userName = $userName;
            $this->password = $password;
            $this->DBMS = $DBMS;
            $this->dbName = $dbName;
        }

        public function connect(){
            try {
                $this->conection = new PDO($this->DBMS.":host=".$this->serverName.";dbname=".$this->dbName,$this->userName,$this->password);
                echo "It's Conenct";
            } catch (PDOException $e) {
                echo ("Error ".$e->getMessage());
            }
        }
    }


?>