<?php
    class Metodos{
        public function mandarColor($valor){
            if ($valor==1) {
                return "rojo";
            }else if($valor==2) {
                return "negro";
            }else if($valor==3){
                return "azul";
            }
        }
        public function darDeAltaColor($tipocolor){
            $obj= new Metodos();
            return $obj->mandarColor(1);
        }
        //Este metodo funciona exactamente igual que el de arriba
        /*
         public function darDeAltaColor($tipocolor){
            return self::mandarColor($tipocolor);
        }
        */ 
    }

    $obj= new Metodos();
    echo $obj->darDeAltaColor(1);
?>