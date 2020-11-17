<?php

    class productoController extends Controller{
        public function __construct(){
        }

        public function index(){

            $data =
            [
                'title' => 'Nuami Framework',
                'bg'    =>  'dark'
            ];
            View::render('Producto', $data);
        }

    }
