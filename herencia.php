<?php
    class clasePadre{
        public function metodoPadre(){
            return "hola desde el padre";
        }
        public function metodo1(){
            return "este es metodo padre";
        }
    }
    class claseHijo extends clasePadre{
        public function metodohijo(){
            //con self madas a llamar cualquier metodo
          // return self::metodoPadre();
          return parent::metodo1(); 
          //parent para usar el metodo de la extension
        }
        public function metodo1(){
            return "este es metodo hijo";
        }
    }
    /*La herencia es obtener las propieddades
     de una clase a otra, mediante la palabra reservada extends
     */

        $obj= new claseHijo();
        echo $obj->metodohijo();
        //la instancia rapida o de doble puntuacion 
       //echo claseHijo::metodoPadre();    
?>