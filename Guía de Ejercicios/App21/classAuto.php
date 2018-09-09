<?php


    class Auto
    {

        //debes pasarle algo de tipo auto para que lo muestre
        public static function mostrarAuto($auto)
        {
            $show = "". $auto->_marca. " - ".$auto->_color. " - ". $auto->_precio;

            if($auto->_fecha !== null)
            {
                $show .= " - ". date("D dS F o",$auto->_fecha);
            }

            return $show;
        }

        //resibe 2 objetos de tipo Auto
        public static function Add($autoA, $autoB)
        {
            $returnAux = 0;

            if($autoA->Equals($autoB) == true) $returnAux = $autoA->_precio + $autoB->_precio;

            return $returnAux;

        }



        //contiene un string del color
        private $_color;

        //contiene un Double del precio
        private $_precio;

        //contiene un string con la marca del Vehiculo
        private $_marca;

        //contiene un DateTime
        private $_fecha;

        public function __constructor($marca, $color, $precio = 10000,  $fecha = NULL)
        {
            $this->_color = $color;
            $this->_precio = $precio;
            $this->_marca = $marca;
            $this->_fecha = $fecha;

        }




        //tiene que pasarle algo el impuesto que desee
        public function AgregarImpuesto($impuesto)
        {
           $this->precio += $impuesto;

           
        }

        //solo compara autos
        public function Equals($auto)
        {
            $returnAux = false;

            if($this->_marca === $auto->_marca) $returnAux = true;

            return $returnAux;
        }

        


        

    }



?>