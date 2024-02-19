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

        public function getId(){
            return $this->id;
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

        // insert
        public function insert($auto){
            $query = "insert into autos(color,modelo,marca) values('".$auto->getColor()."','".$auto->getModelo()."','".$auto->getMarca()."')";
            $this->conection->exec($query);
            echo "<br>Registro guardado con exito";
        }

        // delete
        public function delete($id){
            $query = "delete from autos where id=".$id;
            // Aqui el problema es la === deberiamos cambiar por una doble igualdad o directamente el resultado de nuestra exec como lo vimos en clases anteriores
            if($this->conection->exec($query)==true){
                echo "Registro con el ID: ".$id." Fue eliminado exitosamente";
            }else{
                echo "Error al eliminar el registro con el ID: ".$id;
            }
        }

        // update 
        public function update($auto){
            $query = "update autos set color='".$auto->getColor()."', modelo='".$auto->getModelo()."', marca='".$auto->getMarca()."' where id=".$auto->getId();
            $this->conection->exec($query);
        }

        // select
        public function selectAll(){
            try{
                $query = "SELECT * FROM autos";
                // Error no usamos exec porque hacemos una consulta y usamos query
                //$result = $this->conection->exec($query);
                $result = $this->conection->query($query);
                //print_r($result);
                echo '<table align="center"> <tr>   <th>ID</th>  <th>Color</th>    <th>Marca</th>  <th>Modelo</th>   </tr>';
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['color']."</td>
                            <td>".$row['marca']."</td>
                            <td>".$row['modelo']."</td>
                        </tr>";
                }
                echo '</table>';
            }catch(PDOException $e){
                var_dump($e);
            }

        }
        
        public function getLastID(){
            return $this->conection->lastInsertId();
        }

        public function createDatabase(){
            $this->conection->exec("drop database if exists talentos_digitales");
            $database = "CREATE DATABASE talentos_digitales";
            $this->conection->exec($database);
            echo "La base de datos fue creada exitosamente";
        }

        public function createTable(){
            $this->conection->exec("drop table if exists autos");
            $table = "create table autos(id integer auto_increment primary key,color varchar(50),marca varchar(100),modelo varchar(100))";
            $this->conection->exec($table);
            echo "tabla creada exitosamente";
        }

        public function closeConection(){
            $this->conection = null;
            echo "close conection sacessfuly";
        }

    }




?>