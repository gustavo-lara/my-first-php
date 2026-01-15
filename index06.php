<?php

class Veiculo
{
    protected $novoModelo; //Só conseguimos acessar dentro do escopo da classe e classes filhas
    private $cor; //Só conseguimos acessar dentro do escopo da classe
    public $ano;

    public function setCor($c)
    {
        $this->cor = $c;
    }

    public function getCor()
    {
        return $this->cor;
    }
}

class Carro extends Veiculo
{

    public function setModelo(string $m)
    {
        $this->novoModelo = $m;
    }

    public function getModelo()
    {
        return $this->novoModelo;
    }
}


$carro = new Carro();
$carro->setModelo("Civic");
echo $carro->getModelo();

echo "<br>";

$veiculo = new Carro();
$veiculo->setCor("Azul");
echo $veiculo->getCor();