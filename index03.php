<?php

class Login
{
    private $email; //Atributo privado
    private $senha; //Atributo privado

    public function getEmail() //Getter para acessar o atributo privado
    {
        return $this->email;
    }

    public function getSenha() //Getter para acessar o atributo privado
    {
        return $this->senha;
    }

    public function setEmail($e) //Setter para modificar o atributo privado
    {
        $this->email = $e;
    }

    public function setSenha($s)
    { //Setter para modificar o atributo privado
        $this->senha = $s;
    }

    public function Logar()
    {
        if ($this->email == "teste@teste.com" and $this->senha == "123456") { //Supondo que venha de um banco de dados
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos!";
        }
    }
}

$tentativa1 = new Login();
$tentativa1->setEmail("teste@teste.com");
$tentativa1->setSenha("1234567");
$tentativa1->Logar();

echo "<br>";
echo "<br>";

$tentativa2 = new Login();
$tentativa2->setEmail("teste@teste.com");
$tentativa2->setSenha("123456");
$tentativa2->Logar();

echo "<br>";
echo "<br>";
echo "Email primeira tentativa: " . $tentativa1->getEmail();
echo "<br>";
echo "Senha primeira tentativa: " . $tentativa1->getSenha();
echo "<br>";
echo "<br>";
echo "Email segunda tentativa: " . $tentativa2->getEmail();
echo "<br>";
echo "Senha segunda tentativa: " . $tentativa2->getSenha();
