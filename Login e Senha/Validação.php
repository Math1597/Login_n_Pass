<?php
require_once 'init.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nome"])) {
        $erro = "Campo nome obrigatório";
    } else {
        $nome = test_input($_POST["nome"]);
        // Checa se o nome contém apenas letras e espaço em branco
        if (!preg_match("/^[a-zA-Z ]*$/", $nome)) {
            $nomeErr = "Digite apenas letras e espaço em branco.";
        }
    }
    if (empty($_POST["usuario"])) {
        $usuarioErr = "Nome de usuário obrigatório";
    } else {
        $usuario = test_input($_POST["usuario"]);
        if (!preg_match("/^[a-zA-Z\ ]*$/", $usuario)) {
            $usuarioErr = "Digite apenas letras, sem espaço.";
        }
    }
    if (empty($_POST["senha1"])) {
        $senha1Err = "Digite a sua senha";
    } else {
        $senha1 = test_input($_POST["senha1"]);
        if (!preg_match("/^[a-zA-Z\0-9\d\._]*$/", $senha1)) {
            $senha1Err = "Senha fora do padrão. Uma senha deve conter pelo menos uma letra maiúscula, uma minúscula, um número e um caractere especial.";
        }
    }
    if (empty($_POST["senha2"])) {
        $senha2Err = "Digite novamente a sua senha";
    } else {
        $senha2 = test_input($_POST["senha2"]);
        if ($senha2 !== $senha1) {
            $senha2Err = "As senhas não correspondem";
        } else {
            return sha1(md5($str));
        }
    }
    if (empty($_POST["email"])) {
        return NULL;
    }
    else {
        $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de e-mail inválido"; 
    }
}
}
// define variables and set to empty values
$id = -1;
$senha1Hash = make_hash($senha1);
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha1 = isset($_POST['senha1']) ? $_POST['senha1'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha2 = $nomeErr = $usuarioErr = $senha1Err = $senha2Err = $emailErr = "";


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}