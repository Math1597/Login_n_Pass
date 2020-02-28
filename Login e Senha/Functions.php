
<?php

/**
 * Conecta com o MySQL usando PDO
 */
function db_connect() {
    $servername = "localhost";
    $dbname = "store";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "<b style='color:MediumSeaGreen;'>Conectado</b>";
        return $conn;
    } catch (PDOException $e) {
        
        echo "<b style='color:Tomato;'>Beleza, tá sabendo legal!</b><br> " . $e->getMessage();
        return null;
    }
}

function make_hash($str) {
    return sha1(md5($str));
}

/**
 * Cria o hash da senha, usando MD5 e SHA-1

 */

/**
 * Verifica se o usuário está logado
 */
function isLoggedIn() {
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        return false;
    }

    return true;
}
