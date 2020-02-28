<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Relatório dos clientes</title>
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
        <h1>Relatório dos clientes</h1><br><br>
        <?php
        require_once 'init.php';
        require_once 'functions.php';
        
        echo "<table style='border: solid 1px red; color:white; background-color:Tomato;'>";
        echo "<tr><th>Id</th><th>Usuário</th><th>Email</th><th>Data de Registro</th></tr>";

        /*
         * O seguinte exemplo utiliza declarações preparadas.
         * Seleciona o id, o nome e o sobrenome, e exibe os
         * resultados numa tabela html.
         */
        class Tabela extends RecursiveIteratorIterator {

            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current() {
                return "<td style='width:150px;border:1px solid blue; color:black; background-color:DodgerBlue;'>" . parent::current() . "</td>";
            }

            function beginChildren() {
                echo "<tr>";
            }

            function endChildren() {
                echo "</tr>" . "\n";
            }

        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "creci";

        try {
            $conn = db_connect();
            $stmt = $conn->prepare("SELECT Id, Usuário, Email, DataRegistro FROM cliente");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach (new Tabela(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                echo $v;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        echo "</table>";
        echo "<br>";
        ?>
        <a href="DBExport.php">Exportar</a>
    </body>
</html>
