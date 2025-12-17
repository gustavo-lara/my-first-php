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

$gustavo->Falar(); //Chamando o método Falar da classe Pessoa

class Carro
{
    public $modelo;
    public $marca;
    public $ano;
    public $cor;
    public $valor;

    public function Comprar($nome)
    {
        echo $nome . " comprou o carro " . $this->modelo . " da marca " . $this->marca . " no valor de " . $this->valor . " reais.";
        echo "<br>";
    }
}

$carroDeGustavo = new Carro();

$carroDeGustavo->modelo = "c63";
$carroDeGustavo->marca = "Mercedes-Benz";
$carroDeGustavo->ano = "2013";
$carroDeGustavo->cor = "branco";
$carroDeGustavo->valor = 3500000;

$carroDeGustavo->comprar($gustavo->nome);
