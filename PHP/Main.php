<?php

require_once "Pessoa.php";
require_once "Prato.php";
require_once "Produtos.php";

$cliente = new Cliente("Hudson","teste@teste.com",1234,"012.123.789-70");
$funcionario = new Funcionario("Daniel","teste@teste.com",1234,"521.658.978-80");
$produto = new Produtos("Pão","412Ab123nias",10);
$prato = new Prato("X-bacon","Hamburguer com pão,carne....","R$ 16,50");

/*LOGIN*/
@include 'config.php';
if(isset($_POST['nome da teg exp "submit"'])){
    
    $nome = mysqli_real_escape_string($coon, $_POST['/*nome da teg exp "name"*/']);
    $email = mysqli_real_escape_string($coon, $_POST['nome da teg exp "email"']);
    $senha = md5($_POST['nome da teg exp "senha"']);
    $senhac = md5($_POST['nome da teg exp "senhac"']);
    $user_type = $_POST['nome da teg exp "user_type"'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$senha'";

    $result = mysqli_query($coon, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = "O usuário já existe!";
    }
    else{
        if($senha != $senhac){
            $erro[] = 'A senha não corresponde!';
        }
        else{
            $inser = "INSERT INTO user_form(nome, email, password, user_type) VALUES('$nome','$email','$senha','$user_type')";
            mysqli_query($conn, $inser);
            header('location:/*Nome da pag do login*/');
        }
    }
}

/* script dentro do codigo HTML para erro 
<?php
    if(isset($error)){
        foreach($error as $error){
            echo '<span class="erro-msg">'.$error.'</span>';
        }
    }
?>
*/
/*Registrar*/
@include 'config.php';
session_start();

if(isset($_POST['nome da teg exp "submit"'])){

    $nome = mysqli_real_escape_string($coon, $_POST['/*nome da teg exp "name"*/']);
    $email = mysqli_real_escape_string($coon, $_POST['nome da teg exp "email"']);
    $senha = md5($_POST['nome da teg exp "senha"']);
    $senhac = md5($_POST['nome da teg exp "senhac"']);
    $user_type = $_POST['nome da teg exp "user_type"'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$senha'";

    $result = mysqli_query($coon, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_nome'] == $row['nome'];
            header('location:/*Pagina do admin*/');
        }
        elseif($row['user_type'] == 'admin'){

            $_SESSION['user_nome'] == $row['nome'];
            header('location:/*Pagina do user*/');
        }
    }else{
        $error[]= 'E-mail ou Senha incorretos!';
    }
}

/* script dentro do codigo HTML para erro 
<?php
    if(isset($error)){
        foreach($error as $error){
            echo '<span class="erro-msg">'.$error.'</span>';
        }
    }
?>
*/