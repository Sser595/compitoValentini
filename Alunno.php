<?php
    class Alunno{
        public String $nome;
        public String $cognome;
        public int $eta;
    
        function __construct($nome, $cognome, $eta){
            $this-> nome = $nome;
            $this-> cognome = $cognome;
            $this-> eta = $eta; 
        }
        function toString(){
            return "Nome: ".$this->nome.", Cognome: ".$this->cognome.", Età: ".$this->eta;
        }
        function getName(){
            return $this->nome;
        }
    }

?>