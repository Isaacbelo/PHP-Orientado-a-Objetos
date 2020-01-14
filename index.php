<?php
        
    class Pessoa {
        public $nome;
        public $idade;
            
        //Métodos
        public function Falar() {
            //echo "Falou ";
            echo $this->nome." de ".$this->idade." anos, acabou de falar";
            //Isaac de 40 anos, acabou de falar.
        }
            
    }
    //Instanciando a classe
        
    $isaac = new pessoa();
    //var_dump($isaac);
    
    // Usando o método
   // $isaac->Falar(); // saída = falou
    
    // Atribuindo valores
    $isaac->nome = "Isaac Belo ";
    $isaac->idade = 40;
    $isaac->Falar();
    /*var_dump($isaac);
    echo $isaac->nome;
    echo $isaac->idade;*/
    
    
        
        


