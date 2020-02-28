<?php

require 'init.php';
require_once 'functions.php';

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha1 = isset($_POST['senha1']) ? $_POST['senha1'] : '';
$senha1 = make_hash($senha1);

if (empty($usuario) || empty($senha1)) {
    echo "Informe usuário e senha.";
    exit;
}

 else {

    try {
    $conn = db_connect();
    $sql = "SELECT Id FROM cliente WHERE Usuário = '$usuario' and Senha = '$senha1'";
    $stmt = $conn->prepare($sql);
    //$stmt->bindParam(':usuário', $usuário); o método bind não sabe interpretar acentos, portanto, será necessário removê-los das variáveis
    //$stmt->bindParam(':senha', $senha1);
    $stmt->execute();
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
    echo $exc->getMessage();
}


/* $stmt->execute(array('::usuário' => '$usuário'));
  $stmt->execute(array(':senha' => '$senha1')); */
try {
  $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);  
  //echo $usuarios;
  var_dump($usuarios);
} catch (Exception $ex) {
    echo $ex->getMessage();
}


if (count($usuarios) <= 0) {
    echo "<b style='color:Tomato;'>Usuário ou senha incorretos</b>";
    exit;
}
else {
// pega o primeiro usuário
$usuarios = $usuarios[0];
session_start();

$_SESSION['lang'] = 'pt_br';
$_SESSION['logged_in'] = true; //Validar se a autenticação foi correta
$_SESSION['login'] = $usuario; //Importante encapsular esses métodos, pois eles expostos assim podem ser usados de forma maliciosa por hackers.

header('Location: index.php');
}
}
    




/*if ($rowS) {
    if ($rows["Senha"] == $senha1) {
        $erro = "";
        $sucesso = "Bem vindo" . $usuário . "!!";
        $msg = "Sair";
    } elseif ($rows["Usuário"] != $usuário) {
        $erro = "Usuário inválido!!";
        $sucesso = "";
        $msg = "Tente novamente";
    } else {
        $erro = "Senha invalida!!";
        $sucesso = "";
        $msg = "Tente novamente";
    }
}*/
