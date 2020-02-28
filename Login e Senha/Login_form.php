<!--?php
 session_start();
 ?>-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
            <title>Login</title>
        </head>
        <body>
            <div class="container">
            <br /> <br />
            <!--<?php
            //print_r($_SESSION);
            //var_dump($_SESSION);
            ?>-->
            <form action="Login.php" method="post" >
                <b>Login</b>
                <br><br>
                <label>Usuário</label>
                <input type="text" name="usuario" id="usuario" required> 
                <br><br>
                <label>Senha</label>
                <input type="password" name="senha1" id="senha1" required>
                <br><br>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </body>
</html>