<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome_recebido, $preco_recebido, $quantidade_recebido){
            $this-> Nome = $Nome;
            $this-> Preço = $Preço;
            $this-> Quantidade = $Quantidade;
        }

        public function getNome() {
            return $this->Nome = $nome_recebido;
        }

        public function getPreco() {
            return $this->Preco = $preco_recebido;
        }

        public function getQuantidade() {
            return $this->Quantidade = $quantidade_recebido;
        }
    }
    

?>