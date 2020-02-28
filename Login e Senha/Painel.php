<?php
session_start();
require_once 'init.php';

require 'check.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel</title>
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
        <h1 style="text-align:center;">Página inicial</h1>
        <p>Bem vindo ao seu perfil, <?php echo $_SESSION['login']; ?> | <a href="Logout.php">Sair</a></p><br>
        <a href="Report.php">Exibir dados</a>
    </body>
</html>
