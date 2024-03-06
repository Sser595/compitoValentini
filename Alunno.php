<?php
    class Alunno implements JsonSerializable{
        public  $nome;
        public  $cognome;
        public  $eta;
    
        function __construct($nome, $cognome, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta; 
        }
        function toString(){
            return "Nome: ".$this->nome.", Cognome: ".$this->cognome.", Età: ".$this->eta;
        }
        function getName(){
            return $this->nome;
        }

        public function jsonSerialize() {
            $a =  [
                'nome'=>$this->nome,
                'cognome'=>$this->cognome,
                'eta'=>$this->eta
            ];
            return $a;
        }
    }

?>