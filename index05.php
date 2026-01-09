<?php
//Herança é um recurso que permite classes compartilharem atributos e métodos 
//afim de reaproveiar códigos ou comportamentos gerais

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo { //Extends faz herdar atributos de "Veiculo"

    public function ligarLimpadorDeParabrisa () {
        echo "Limpou";
    }

}

class Moto extends Veiculo {

    public function darGrau() {
        echo "Grau";
    }

}

$carro = new Carro();

$carro->modelo = "Onix";
$carro->cor = "Prata";
$carro->ano = "2020";
$carro-> Parar();
echo "<br>";
$carro-> ligarLimpadorDeParabrisa();
echo "<br>";
// var_dump($carro);

echo "<br>";

$moto = new Moto();

$moto->modelo = "CG 160";
$moto->cor = "Preto";
$moto->ano = "2018";
$moto-> Andar();
echo "<br>";
$moto-> darGrau();
echo "<br>";
// var_dump($moto);