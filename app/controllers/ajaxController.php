<?php

    class ajaxController extends Controller {

        private $accepted_actions = ['add','get','load','update','delete'];
        private $required_params = ['hook','action'];

        function __construct()
        {
            foreach ($this->required_params as $param) {

                if(!isset($_POST[$param])) {
                    json_output(json_build(403));
                }
            }
            if(!in_array($_POST['action'] , $this->accepted_actions)) {

                json_output(json_build(403));
            }
        }

        function index()
        {
            json_output(json_build(403));
        }

        function bee_add_producto(){

            try{

                $producto                =   new productoModel();
                $producto->nombre        =   $_POST['nombre'];
                $producto->precio        =   $_POST['precio'];

                if(!$id = $producto->add()){

                    json_output(json_build(400, null, "Hubo error al guardar el registro"));

                }

                json_output(json_build(201, $producto));

            }catch(Exeption $e){

                json_output(json_build(400, null, $e->getMessage()));

            }

        }

    }