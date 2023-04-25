<?php

abstract class Pessoa{
    protected string $nome;
    protected string $email;
    protected int $senha;
    protected string $cpf;

    //Criação dos metodos
    public function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getCPF(){
        return $this->cpf;
    }
}

//Cliente
class Cliente extends Pessoa{
    public function __construct($nome, $email, $senha,$cpf){
        parent::__construct($nome, $email,$senha,$cpf);
    }
}

//Funcionario
class Funcionario extends Pessoa{
    public function __construct($nome, $email, $senha,$cpf){
        parent::__construct($nome, $email,$senha,$cpf);
    }
}

//ADM
class ADM extends Pessoa{
    public function __construct($nome, $email, $senha,$cpf){
        parent::__construct($nome, $email,$senha,$cpf);
    }
}

//Função login
class Login extends Pessoa{
    public function login(){
        if($this->email == 'teste@teste.com' and $this->senha == '1234'){
            echo "login efetuado";
        }
    }
}
