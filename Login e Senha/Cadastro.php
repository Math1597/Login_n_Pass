<?php
$id = -1;
$nome = $email = $usuario = $senha1 = $senha2 = $nomeErr = $usuarioErr = $senha1Err = $senha2Err = $emailErr = "";
require 'Validação.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Cadastro</title>
        <style>
             body {background-color: powderblue;}
            h1 {
                text-align: center;
                color: red;
            }
            p { 
                text-align: justify;
                text-indent: 50px;
                letter-spacing: 2px;
                color: blue;}
            a {
                text-decoration: none;
                color: #008CBA;
            }
        </style>
    </head>
    <body>
        <div align="center">
            <h1 style="font-size:200%; font-family:verdana; color:#990000"><b>Cadastro</b></h1>
            <br/><br/>
            <p><span class="error">* Campos obrigatórios</span></p>
            <form action="Insert.php" method="POST"> <!--$_SERVER é um array contendo informações como cabeçalhos, paths, e localizações do script,
                                                                enquanto que o índice PHP_SELF, é o nome do arquivo do script que está executando,
                                                                relativa à raiz do documento. Ou seja, quando os dados são inseridos no formulário submetido,
                                                                os mesmo serão enviados à mesma página que realizou a requisição, neste caso, a página cadastro.php.-->
                Nome<br/>
                <input type="text" data-ls-module="charCounter" maxlength="50" name="nome" placeholder="Digite o seu nome completo" value="<?php echo $nome; ?>" required><br/><br/>
                <span class="error">* <?php echo $nomeErr; ?></span>
                <br><br>
                Nome de Usuário<br/>
                <input type="text" data-ls-module="charCounter" maxlength="20" name="usuario" placeholder="Digite o seu nome de usuário" value="<?php echo $usuario; ?>" required><br/><br/>
                <span class="error">* <?php echo $usuarioErr; ?></span>
                <br><br>
                Senha<br/>
                <input type="password" data-ls-module="charCounter" autocomplete="off" minlength="8" maxlength="40" name="senha" placeholder="Digite a sua senha" value="<?php echo $senha1; ?>" required><br/><br/>
                <!--<span class="error">* <?php echo $senha1Err; ?></span>-->
                <br><br>
                Digite novamente a sua senha<br/>
                <input type="password" data-ls-module="charCounter" autocomplete="off" minlength="8" maxlength="40" name="senha" placeholder="Digite a sua senha" value="<?php echo $senha2; ?>" required><br/><br/>
                <span class="error">* <?php echo $senha2Err; ?></span>
                <br><br>
                E-mail (opcional)<br/>
                <input type="text" data-ls-module="charCounter" maxlength="150" name="email" placeholder="Digite o seu e-mail" value="<?php echo $email; ?>"><br/><br>
                <span class="error">* <?php echo $emailErr; ?></span>
                <br><br>
                <input type="hidden" value="-1" name="id" >
                <button type="submit">Cadastrar</button>
            </form><br><br>
            <?php
            echo "<h2>Saída:</h2>";
            echo "<b>Usuário:</b>", $usuario;
            echo "<br>";
            echo "<b>E-mail:</b>", $email;
            echo "<br>";
            ?>
        </div>
    </body>
</html>
