<?php

    class homeController extends Controller{
        public function __construct(){
        }

        public function index(){
            $producto = new productoModel();
            $data = $producto->all();
            View::render('Nuami', $data);
        }

        function test(){
            $data =
            [
                'title' => 'Nuami Framework',
                'bg'    =>  'dark'
            ];
            echo '<pre>';
            echo '</pre>';
            View::render('test', $data);
        }

        function flash(){
            View::render('flash');
        }

    }
