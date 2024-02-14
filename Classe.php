<?php
    include 'Alunno.php';
    class Classe{
        
        private $alunni = []; 
        function __construct(){
            $this-> alunni = array(new Alunno("Gianni", "xie", 18), new Alunno("Serena", "Valentini", 18), new Alunno("Pippo", "Baudo", 17));
        }
        
        function toString(){
            $info = "";
            foreach($this->alunni as $alun){
                $info = $info.$alun->toString();
            }
            return $info;
        }
        function getAlunnoByName($nome){
            foreach($this->alunni as $alun){
                if($alun->getName() == $nome){
                    return $alun->toString();
                }
            }
            return null;
        }
    }
    


?>