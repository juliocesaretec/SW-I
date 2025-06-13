<?php
    class Livro{
        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($titulo,$autor,$disponivel){
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = $disponivel;
        }

        public function getTitulo(){
            return $this->Titulo;
        }

        public function getDisponivel(){
            return $this->Disponivel;
        }

        public function Emprestar(){
            if ($this->getDisponivel() == true){
                $this->Disponivel = false;
            }else{
                echo "<br> O livro solicitado não está disponivel no momento";
            }
        }
        public function Devolver(){
            $this->Disponivel = true;
            echo "<br> Obrigado! Livro devolvido no momento";           
        }

        public function ExibirStatus(){
            $titulo_livro = $this->getTitulo();
            if($this->getDisponivel() == true){
                $status_livro = "Disponivel";
            }else{
                $status_livro = "Emprestado";
            }

           $resposta = "O livro ".$titulo_livro. "está ".$status_livro;

            return $resposta;
            //com o titulo e o status ('Disponivel' ou 'emprestado')
        }
    }
?>