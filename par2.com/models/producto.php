<?php
     
     
     class producto {

        private $id_producto;
        private $descripcion;
        private $costo_compra;
        private $precio_venta;
        private $cantidad_existencia;

        public function __construct($id_producto)
        {
            $this -> id_producto= $id_producto;
           
            
        }
        public function setId ($id_producto){
            $this-> id_producto = $id_producto;

        }

        public function getId(){
            return $this ->id_producto;
        }

        public function getdes(){
            return $this ->descripcion;
        }
        public function getcostoCompra(){
            return $this ->costo_compra;
        }
        public function pventa(){
            return $this ->precio_venta;
        }
        public function Cexis(){
            return $this ->cantidad_existencia;
        }
        
        public function articulos(){
            
            $articulos[]= ["id_producto"=>"1","descripcion"=>"Laptop acer nitro","costo_compra"=>"$1230","precio_venta"=>"$1230","cantidad_existencia"=>"50"];
            $articulos[]= ["id_producto"=>"2","descripcion"=>"ssd 1tb m.2 samsung","costo_compra"=>"$100","precio_venta"=>"$100","cantidad_existencia"=>"78"];
            $articulos[]= ["id_producto"=>"3","descripcion"=>"tv 55' sony","costo_compra"=>"$700","precio_venta"=>"$700","cantidad_existencia"=>"80"];
            $articulos[]= ["id_producto"=>"4","descripcion"=>"proyector 4k xaiomi","costo_compra"=>"$850","precio_venta"=>"$850","cantidad_existencia"=>"70"];
            $articulos[]= ["id_producto"=>"5","descripcion"=>"silla gamer","costo_compra"=>"$480","precio_venta"=>"$480","cantidad_existencia"=>"40"];

    }

    public static function Mproducto(){

        $articulos[]= ["id_producto"=>"1","descripcion"=>"Laptop acer nitro","costo_compra"=>"$1230","precio_venta"=>"$1230","cantidad_existencia"=>"50"];
        $articulos[]= ["id_producto"=>"2","descripcion"=>"ssd 1tb m.2 samsung","costo_compra"=>"$100","precio_venta"=>"$100","cantidad_existencia"=>"78"];
        $articulos[]= ["id_producto"=>"3","descripcion"=>"tv 55' sony","costo_compra"=>"$700","precio_venta"=>"$700","cantidad_existencia"=>"80"];
        $articulos[]= ["id_producto"=>"4","descripcion"=>"proyector 4k xaiomi","costo_compra"=>"$850","precio_venta"=>"$850","cantidad_existencia"=>"70"];
        $articulos[]= ["id_producto"=>"5","descripcion"=>"silla gamer","costo_compra"=>"$480","precio_venta"=>"$480","cantidad_existencia"=>"40"];

            return $articulos;

    }
    

    
    public  function Bproducto(){

        $articulos[]= ["id_producto"=>"1","descripcion"=>"Laptop acer nitro","costo_compra"=>"$1230","precio_venta"=>"$1230","cantidad_existencia"=>"50"];
            $articulos[]= ["id_producto"=>"2","descripcion"=>"ssd 1tb m.2 samsung","costo_compra"=>"$100","precio_venta"=>"$100","cantidad_existencia"=>"78"];
            $articulos[]= ["id_producto"=>"3","descripcion"=>"tv 55' sony","costo_compra"=>"$700","precio_venta"=>"$700","cantidad_existencia"=>"80"];
            $articulos[]= ["id_producto"=>"4","descripcion"=>"proyector 4k xaiomi","costo_compra"=>"$850","precio_venta"=>"$850","cantidad_existencia"=>"70"];
            $articulos[]= ["id_producto"=>"5","descripcion"=>"silla gamer","costo_compra"=>"$480","precio_venta"=>"$480","cantidad_existencia"=>"40"];

        foreach ($articulos as $t)
                {
                    if($this ->id_producto == $t["id_producto"] )
                    return $t;
                    
                }
                return[];
    }
 }
