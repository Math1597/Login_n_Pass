<?php
session_start();
require 'init.php';
require_once 'functions.php';
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
        <title>Home</title>
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
        <?php 
            $html = '';
            if (isLoggedIn()){
                $html = '<p>Seja bem vindo ao nosso site, '.$_SESSION['login'].' <a href="painel.php">Painel</a> | <a href="Logout.php">Sair</a></p>';
            } 
            else{
                $html = '<b style="color:mediumblue">Olá, visitante.</b><br> 
                <p><a href="Login_form.php">Entre sem bater!</a></p>
                <a href="Cadastro.php">Primeiro acesso? Clique aqui!</a>';
            }
            
            echo $html;
        ?>
    </body>
</html>
