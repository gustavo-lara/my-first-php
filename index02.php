<?php

class Pessoa
{ //Classe 
    public $nome; //Atributo dessa Classe 
    public $idade;

    public function Falar()
    { // Método, ação que a classe pode fazer
        echo "Falou <br>";
        echo $this->nome . " de " . $this->idade . " anos acabou de falar."; //Concatenação chamando os atributos da classe
        echo "<br>"; 
    }
}

$gustavo = new Pessoa(); //Instanciando a classe e criando um objeto -> criar um objeto real baseado no modelo

$gustavo->nome = "Gustavo Lara";
$gustavo->idade = 19;

echo $gustavo->nome;
echo "<br>";
$gustavo->Falar(); //Chamando o método Falar da classe Pessoa

