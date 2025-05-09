<?php
    class Lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = true;
        }
        public function Desligar(){
            $this->Status = false;
        }
        public function MostrarDados(){
            echo "O fabricante é: " . $this->Fabricante . "<br>";
            echo "A tensão é: " . $this->Tensao . "<br>";
            echo "A potencia é: " . $this->Potencia . "<br>";
            echo "A cor é: " . $this->Cor . "<br>";
            if ($this->Status == 1){
                echo "O status é: LIGADA! <br> ";
            }else {
                echo "O status é: DESLIGADA! <br>";
            }
            
        }
    }

?>