<?php

class Login
{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome) //Quando instanciamos uma classe esse método será inicializado
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function Logar()
    {
        if ($this->email == "teste@teste.com" and $this->senha == "123456") {
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos!";
        }
    }
}

$Logando = new Login("teste@teste.com", "123456", "Gustavo Lara");
$Logando->Logar();

echo "<br>";
echo "Nome da tentativa: " . $Logando->getNome();
echo "<br>";
echo "Email da tentativa: " . $Logando->getEmail();
echo "<br>";