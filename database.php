
<?php
class Database{
    private $PDOLocal;
    private $user = "root";
    private $password = "1502";
    private $server="mysql:host=127.0.0.1; dbname=itsl; charset=utf8";
    public function conectarDB(){
    try{
        $this->PDOLocal = new PDO ($this->server, $this->user, $this->password);
     }catch(PDOException $e)
      {
        echo "Error de conexión";
        echo $e->getMessage();
      }
    }
    public function ejecutarSQL ($query) {
            try{
                $this->PDOLocal->query($query);
            }catch(PDOException $e){
                echo $e -> getMessage();
            }
    
        }  
    public function desconectarDB(){
        try{
           $this -> PDOLocal = null;
        }catch(PDOException $e){
            echo $e -> getMessage();
        }
    }   

    public function seleccionar($query){
        try{
           $resultado = $this -> PDOLocal->query($query);
           $renglo = $resultado->rowCount();

           if($renglo > 0){
            while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
                $Datos[] = $row;
            }
           }else{
            $Datos[] = [];
           }
           return $Datos;
        }catch(PDOException $e){
            echo $e -> getMessage();
        }
    }
}

// $db = new Database();
// $db-> conectarDB();
// $resp = $db->seleccionar("Select * from peliculas");
// print_r($resp);
?>