<?php

    class productoModel extends Model{

        public $id;
        public $nombre;
        public $precio;

        /**
         *
         * Model Usuario
         * @return @id
         */

        public function add(){
            $sql = 'INSERT INTO productos(nombre,precio) VALUES(:nombre,:precio)';

            $producto =
            [
                'nombre'     =>  $this->nombre,
                'precio'     =>  $this->precio
            ];

            try{
                return ($this->id = parent::query($sql, $producto)) ? $this->id : false;
            }catch(Exception $e){
                throw $e;
            }
        }

        public function all(){
            $sql = 'SELECT * FROM productos';

            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }
    }
