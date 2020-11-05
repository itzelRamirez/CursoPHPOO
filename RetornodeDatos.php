<?php
    class retornoDatos{
        //tipo string
        public function retornaString($edad){
            if($edad > 18){
                return "Es mayor de edad";
            }else{
                return "No es mayor de edad";
            }
        }
        //tipo entero
        public function retornaEntero($valor){
            if($valor > 0){
                return 1;
            }else{
                return 0;
            }
        }
        //tipo arreglo
        public function retornaArreglo($ciclos){
           $datos=array();
           for($i=0; $i < $ciclos ; $i++){
               $datos[$i]=$i;
           }
           return $datos;
        }
        //tipo Json
        public function retornaJson(){
            $arr=array(
                "hdd" => 500,
                "pantalla" => 21,
                "ram" => 8
                        );
            return json_encode($arr);
        }
       
    }

    $cadena= new retornoDatos();
    var_dump($cadena->retornaString(20));
    echo "<br>";
    var_dump($cadena->retornaEntero(1));
    echo "<br>";
    var_dump($cadena->retornaArreglo(10));
    echo "<br>";
    var_dump($cadena->retornaJson());

?>
